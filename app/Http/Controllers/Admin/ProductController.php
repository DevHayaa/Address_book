<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function product(Request $request)
    {
        $query = Product::with('subCategory');
        
        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where('product_name', 'LIKE', "%{$search}%")
                  ->orWhere('product_description', 'LIKE', "%{$search}%");
        }

        $products = $query->paginate(3); // Adjust to 3 products per page
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

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('images', $imageName, 'public');
        } else {
            $imageName = null;
        }

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
