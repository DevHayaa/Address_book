<?php

namespace App\Http\Controllers\Admin;

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
}
