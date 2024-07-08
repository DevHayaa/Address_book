<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use PDF;
use App\Models\User;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {  
        // Fetch products in random order and limit to 20
        $products = Product::inRandomOrder()->limit(20)->get();
        $products = Product::inRandomOrder()->paginate(8); 
        return view('home.index', compact('products'));
        
    }
       
    public function admin()
    {
        return view('admin.index');
    }

    public function show()
    {
        return view('category.showcategory');
    }
    public function showTopSellingProducts()
    {
        $topProducts = Product::with('subCategory')
                        ->orderBy('sales_count', 'desc')
                        ->take(10)
                        ->get();

        return view('admin.reports.topSellingProducts', compact('topProducts'));
    }

    public function generateTopSellingProductsPdf()
    {
        $topProducts = Product::with('subCategory')
                        ->orderBy('sales_count', 'desc')
                        ->take(10)
                        ->get();

        $pdf = PDF::loadView('admin.reports.topSellingProductsPdf', compact('topProducts'));
        return $pdf->download('top_selling_products.pdf');
    }
    public function topClients()
    {
        $topClients = User::select('users.id', 'users.name', 'users.email')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->selectRaw('SUM(orders.total_price) as total_spent') // Correct column name here
            ->groupBy('users.id', 'users.name', 'users.email')
            ->orderByDesc('total_spent')
            ->limit(10)
            ->get();

        return view('admin.reports.top_clients', compact('topClients'));
    }

    public function generateTopClientsPDF()
    {
        $topClients = User::select('users.id', 'users.name', 'users.email')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->selectRaw('SUM(orders.total_price) as total_spent') // Correct column name here
            ->groupBy('users.id', 'users.name', 'users.email')
            ->orderByDesc('total_spent')
            ->limit(10)
            ->get();

        $pdf = PDF::loadView('admin.reports.top_clients_pdf', compact('topClients'));

        return $pdf->download('top_clients_report.pdf');
    }
   
   
}
