<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderItem;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'product_id' => 'required|integer|exists:products,id',
            'quantity' => 'required|integer|min:1'
        ]);

        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity', 1);
        $user_id = Auth::id();

        $product = Product::find($product_id);

        if (!$product) {
            return response()->json(['message' => 'Product not found.'], 404);
        }

        if ($product->quantity < $quantity) {
            return response()->json(['message' => 'Not enough product in stock.'], 400);
        }

        $cart = Cart::where('user_id', $user_id)->where('product_id', $product_id)->first();

        if ($cart) {
            $cart->quantity += $quantity;
        } else {
            $cart = new Cart();
            $cart->product_id = $product_id;
            $cart->user_id = $user_id;
            $cart->quantity = $quantity;
        }

        $cart->save();

        // Update the product quantity in the database
        $product->quantity -= $quantity;
        $product->save();

        $cartCount = Cart::where('user_id', $user_id)->count();

        return response()->json(['message' => 'Product added to cart successfully!', 'cart_count' => $cartCount]);
    }

    public function updateCart(Request $request, $id)
    {
        $request->validate([
            'quantity' => 'required|integer|min:1'
        ]);

        $quantity = $request->input('quantity');
        $user_id = Auth::id();

        $cart = Cart::where('user_id', $user_id)->where('product_id', $id)->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart item not found.'], 404);
        }

        $product = Product::find($id);

        if ($product->quantity < $quantity) {
            return response()->json(['message' => 'Not enough product in stock.'], 400);
        }

        $product->quantity += $cart->quantity;
        $cart->quantity = $quantity;
        $product->quantity -= $quantity;

        $product->save();
        $cart->save();

        return response()->json(['message' => 'Cart updated successfully!']);
    }

    public function removeFromCart($id)
    {
        $user_id = Auth::id();

        $cart = Cart::where('user_id', $user_id)->where('product_id', $id)->first();

        if (!$cart) {
            return response()->json(['message' => 'Cart item not found.'], 404);
        }

        $product = Product::find($id);
        $product->quantity += $cart->quantity;
        $product->save();

        $cart->delete();

        return response()->json(['message' => 'Product removed from cart successfully!']);
    }
    public function cartCount()
    {
        $cartCount = Cart::where('user_id', auth()->id())->count();
        return response()->json(['count' => $cartCount]);
    }
    public function viewCart()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();
        $cartCount = Cart::where('user_id', $user_id)->count();
        return view('cart.index', compact('cartItems', 'cartCount'));
    }
    
    public function checkout()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();
        $cartCount = Cart::where('user_id', $user_id)->count();
        return view('checkout.index', compact('cartItems', 'cartCount'));
    }
    public function placeOrder(Request $request)
    {
        $user_id = Auth::id();
    
        $request->validate([
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string'
        ]);
    
        $cartItems = Cart::where('user_id', $user_id)->with('product')->get();
    
        if ($cartItems->isEmpty()) {
            return redirect()->route('cart.view')->with('error', 'Your cart is empty.');
        }
    
        $total_price = $cartItems->sum(function($cartItem) {
            return $cartItem->product->price * $cartItem->quantity;
        });
    
        $order = new Order();
        $order->user_id = $user_id;
        $order->total_price = $total_price;
        $order->payment_method = $request->payment_method;
        $order->shipping_address = $request->shipping_address;
        $order->save();
    
        foreach ($cartItems as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->product_id;
            $orderItem->quantity = $item->quantity;
            $orderItem->price = $item->product->price;
            $orderItem->save();
        }
    
        Cart::where('user_id', $user_id)->delete();
    
        return redirect()->route('thankyou')->with('success', 'Order placed successfully.');
    }
}    