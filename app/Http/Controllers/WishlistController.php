<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlistItems = Auth::user()->wishlistItems()->with('product')->get();
        return view('wishlist.index', compact('wishlistItems'));
    }
    public function add(Product $product)
    {
        Auth::user()->wishlistItems()->create(['product_id' => $product->id]);
        toastr()->timeOut(1000)->closeButton()->success('Product added to wishlist.');
        return redirect()->route('wishlist.index');
    }

    public function remove(Product $product)
    {
        Auth::user()->wishlistItems()->where('product_id', $product->id)->delete();
        toastr()->timeOut(1000)->closeButton()->success('Product removed from wishlist.');
        return redirect()->route('wishlist.index');
    }
}
