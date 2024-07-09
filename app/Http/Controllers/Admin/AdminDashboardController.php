<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class AdminDashboardController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user(); // Fetch authenticated user
            // Debugging: Check $user contents
            // dd($user);
    
            return view('admin.dashboard', [
                'user' => $user // Pass the $user variable to the view
            ]);
        } else {
            // Handle case where user is not authenticated (redirect or show login page)
            return redirect()->route('login');
        }
}
public function charts()
{
         // Fetch the data you need for the dashboard
         $clientCount = User::count();
         $orderCount = Order::count();
         $bestSellingProductsCount = $this->getBestSellingProductsCount();
         $topClients = $this->getTopClients();
         $barChartData1 = $this->getBarChartData1();
         $barChartData2 = $this->getBarChartData2();
         $lineChartData = $this->getLineChartData();
 
         return view('admin.dashboard', compact('clientCount', 'orderCount', 'bestSellingProductsCount', 'topClients', 'barChartData1', 'barChartData2', 'lineChartData'));
     }
 
     private function getBestSellingProductsCount()
     {
         return Product::withCount('orderItems')
                       ->orderBy('order_items_count', 'desc')
                       ->limit(10)
                       ->count();
     }
 
     private function getTopClients()
     {
         return User::select('users.id', 'users.name', 'users.email', DB::raw('SUM(orders.total_price) as total_spent'))
                    ->join('orders', 'users.id', '=', 'orders.user_id')
                    ->groupBy('users.id', 'users.name', 'users.email')
                    ->orderBy('total_spent', 'desc')
                    ->limit(10)
                    ->get();
     }
 
     private function getBarChartData1()
     {
         // Example data for bar chart 1
         $data = [
             'labels' => ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
             'data' => [12, 19, 3, 5, 2, 3, 10]
         ];
 
         return $data;
     }
 
     private function getBarChartData2()
     {
         // Example data for bar chart 2
         $data = [
             'labels' => ['Category 1', 'Category 2', 'Category 3', 'Category 4'],
             'data' => [7, 11, 5, 8]
         ];
 
         return $data;
     }
 
     private function getLineChartData()
     {
         // Example data for line chart
         $data = [
             'labels' => ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
             'data' => [5, 10, 3, 7]
         ];
 
         return $data;
     }
}

