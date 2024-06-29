<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function product()
    {
        $products = Product::with('subCategory')->get();
        return view('admin.product.product', compact('products'));
    }

    public function addProduct()
    {
        $subcategories = SubCategory::all();
        return view('admin.product.addProduct', compact('subcategories'));
    }

    public function productStore(Request $request)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subcategory_id' => 'required|exists:sub_categories,id',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName, 'public');
        } else {
            $imageName = null;
        }

        // Create new product
        Product::create([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $imageName,
            'subcategory_id' => $request->subcategory_id,
        ]);

        return redirect()->route('products')->with('success', 'Product added successfully.');
    }

    public function editProduct($id)
    {
        $product = Product::findOrFail($id);
        $subcategories = SubCategory::all();
        return view('admin.product.editProduct', compact('product', 'subcategories'));
    }

    public function updateProduct(Request $request, $id)
    {
        $request->validate([
            'product_name' => 'required',
            'product_description' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'subcategory_id' => 'required|exists:sub_categories,id',
        ]);

        $product = Product::findOrFail($id);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($product->image) {
                Storage::disk('public')->delete('images/' . $product->image);
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName, 'public');
        } else {
            $imageName = $product->image;
        }

        // Update product
        $product->update([
            'product_name' => $request->product_name,
            'product_description' => $request->product_description,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $imageName,
            'subcategory_id' => $request->subcategory_id,
        ]);

        return redirect()->route('products')->with('success', 'Product updated successfully.');
    }

    public function deleteProduct($id)
    {
        $product = Product::findOrFail($id);

        // Delete image if exists
        if ($product->image) {
            Storage::disk('public')->delete('images/' . $product->image);
        }

        $product->delete();

        return redirect()->route('products')->with('success', 'Product deleted successfully.');
    }
}
