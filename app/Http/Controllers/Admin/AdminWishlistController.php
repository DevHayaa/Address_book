<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Wishlist;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;


class AdminWishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::with(['user', 'product'])->paginate(10);
        return view('admin.wishlist.index', compact('wishlists'));
    }

    public function destroy($id)
    {
        $wishlist = Wishlist::findOrFail($id);
        $wishlist->delete();

        return redirect()->route('admin.wishlist.index')->with('success', 'Wishlist item deleted successfully.');
    }
 
}
