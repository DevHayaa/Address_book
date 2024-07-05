<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;

class CosmeticsController extends Controller
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

    public function nailPaints(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'Nail Paint')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.nails.nailpaint', compact('products'));
    }

    public function nailPaintRemover(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'Nail Paint Remover')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.nails.nailpolishremover', compact('products'));
    }


    public function lipTint(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'lip tint')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.lips.liptint', compact('products'));
    }

    public function lipGloss(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'lip gloss')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.lips.lipgloss', compact('products'));
    }

    public function lipstick(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'lipstick')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.lips.lipstick', compact('products'));
    }
    public function lipLiner(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'lip pencil')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.lips.lippencil', compact('products'));
    }
    public function mascara(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'mascara')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.eyes.mascara', compact('products'));
    }
    public function kajal(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'kajal')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.eyes.kajal', compact('products'));
    }
    public function eyeShadow(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'eye shadow')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.eyes.eyeshadow', compact('products'));
    }
    public function eyeLiner(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'eye liner')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.eyes.eyeliner', compact('products'));
    }
    public function facePowder(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'facepowder')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.complexion.facepowder', compact('products'));
    }
    public function foundation(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'foundation')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.complexion.foundation', compact('products'));
    }
    public function blushOn(Request $request)
    {
        $subcategory = SubCategory::where('subCategory_name', 'blushon')->firstOrFail();
        $query = Product::with('subCategory')->where('subcategory_id', $subcategory->id);

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(6); // Adjust to the number of products per page
        return view('categories.cosmetics.complexion.blushon', compact('products'));
    }
}
