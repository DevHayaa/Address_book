<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;

class JewelleryController extends Controller
{
    public function home(Request $request)
    {
        $query = Product::with('subCategory');

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('home', compact('products'));
    }

    public function anklets(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'anklets')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.jewellery.anklets', compact('products'));
    }

    public function rings(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'rings')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.jewellery.rings', compact('products'));
    }

    // Similar methods for other subcategories...

    public function bangles(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'bangles')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.jewellery.bangles', compact('products'));
    }

    public function earRings(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'earRings')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.jewellery.earRings', compact('products'));
    }

    public function necklace(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'necklace')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.jewellery.necklace', compact('products'));
    }
}
