<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\OrderItem;
use Cart; // Assuming you're using a cart package like Laravel Shopping Cart or similar

class CheckoutController extends Controller
{
    public function checkout()
    {
        // Show checkout form
        return view('checkout.index');
    }

    public function placeOrder(Request $request)
    {
        // Validate request inputs
        $request->validate([
            'shipping_address' => 'required|string',
            'payment_method' => 'required|string',
        ]);

        // Assuming you have authenticated users, get user ID
        $userId = auth()->user()->id;

        // Create new order
        $order = new Order();
        $order->user_id = $userId;
        $order->total_price = Cart::getTotal();
        $order->status = 'pending'; // You can set initial status
        $order->payment_method = $request->payment_method;
        $order->shipping_address = $request->shipping_address;
        $order->save();

        // Add order items
        foreach (Cart::getContent() as $item) {
            $orderItem = new OrderItem();
            $orderItem->order_id = $order->id;
            $orderItem->product_id = $item->id;
            $orderItem->quantity = $item->quantity;
            $orderItem->price = $item->price;
            $orderItem->save();
        }

        // Clear the cart after placing the order
        Cart::clear();

        return redirect()->route('thankyou.page')->with('success', 'Order placed successfully!');
    }
}