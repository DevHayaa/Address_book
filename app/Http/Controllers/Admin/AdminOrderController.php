<?php

namespace App\Http\Controllers\Admin;
use PDF;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\cart;

class AdminOrderController extends Controller
{
    public function showOrders()
    {
        $orders = Order::with('user')->get();

        return view('admin.orders.order', compact('orders'));
    }
    public function index()
    {
        $orderItems = OrderItem::with('order', 'product')->get();

        return view('admin.orders.orderItem', compact('orderItems'));
    }
    public function showCart()
    {
        $cartItems = Cart::with('product')->get(); // Assuming 'product' is the relationship in your Cart model
        return view('admin.cart.index', compact('cartItems'));
    }

    public function generatePDF()
    {
        $orders = Order::all();
        
        $pdf = PDF::loadView('admin.orders.pdf', compact('orders'));
        return $pdf->download('orders.pdf');
    }
    public function updateStatus(Request $request)
    {
        $request->validate([
            'order_id' => 'required|exists:orders,id',
            'status' => 'required|string',
        ]);

        $order = Order::findOrFail($request->order_id);
        $order->status = $request->status;
        $order->save();

        return redirect()->route('admin.orders')->with('success', 'Order status updated successfully.');
    }
    public function placeOrder(Request $request)
    {
        // Validate and create the order

        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $request->total,
            // Other order fields
        ]);

        foreach ($request->items as $item) {
            $orderItem = OrderItem::create([
                'order_id' => $order->id,
                'product_id' => $item['product_id'],
                'quantity' => $item['quantity'],
                'price' => $item['price'],
            ]);

            // Update the sales count for the product
            $product = Product::find($item['product_id']);
            $product->increment('sales_count', $item['quantity']);
        }

        return redirect()->route('order.success')->with('success', 'Order placed successfully.');
    }
}
