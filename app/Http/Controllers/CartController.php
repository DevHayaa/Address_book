<?php

// app/Http/Controllers/CartController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add(Request $request, $productId)
    {
        $product = Product::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $cart = session()->get('cart', []);

        if (isset($cart[$productId])) {
            $cart[$productId]['quantity']++;
        } else {
            $cart[$productId] = [
                "name" => $product->product_name,
                "quantity" => 1,
                "price" => $product->price,
                "image" => $product->image
            ];
        }

        session()->put('cart', $cart);
        toastr()->timeOut(1000)->closeButton()->success('Product added to cart successfully!');
        return redirect()->back();
    }

    public function index()
    {
        $cart = session()->get('cart', []);
        return view('cart.index', compact('cart'));
    }

    public function update(Request $request, $productId)
    {
        if ($request->quantity <= 0) {
            return $this->remove($productId);
        }

        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            $cart[$productId]['quantity'] = $request->quantity;
            session()->put('cart', $cart);
        }
        toastr()->timeOut(1000)->closeButton()->success('Cart updated successfully!');
        return redirect()->route('cart.index');
    }

    public function remove($productId)
    {
        $cart = session()->get('cart', []);
        if (isset($cart[$productId])) {
            unset($cart[$productId]);
            session()->put('cart', $cart);
        }
        toastr()->timeOut(1000)->closeButton()->success('Product removed from cart successfully!');
        return redirect()->route('cart.index');
    }
    public function count()
{
    $count = Cart::where('user_id', auth()->id())->count();
    return response()->json(['count' => $count]);
}
public function addToCart(Request $request)
{
    $productId = $request->input('product_id');
    $quantity = $request->input('quantity', 1); // Default quantity is 1

    // Example product data, replace with actual product retrieval
    $product = [
        'id' => $productId,
        'name' => 'Sample Product',
        'price' => 100,
        'quantity' => $quantity,
    ];

    // Get cart from session, or initialize it if not present
    $cart = session()->get('cart', []);

    // Check if product already in cart
    if (isset($cart[$productId])) {
        $cart[$productId]['quantity'] += $quantity;
    } else {
        $cart[$productId] = $product;
    }

    // Update session with new cart
    session()->put('cart', $cart);

    // Return response
    return response()->json([
        'status' => 'success',
        'message' => 'Product added to cart',
        'cartCount' => count($cart)
    ]);
}


}
