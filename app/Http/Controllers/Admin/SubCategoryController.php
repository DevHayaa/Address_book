<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SubCategory;
use App\Http\Controllers\CategoryController;
use App\Models\Category; 

class SubCategoryController extends Controller
{
    public function subCategory()
    {
        $data = SubCategory::with('category')->get(); // Eager load the category
        return view('admin.subCategory.subCategory', compact('data'));
    }

    public function addsubCategory()
    {
        $categories = Category::all(); // Get all categories for the dropdown
        return view('admin.subCategory.addsubCategory', compact('categories'));
    }

    public function subStore(Request $request)
    {
        $SubCategory = new SubCategory;
        $SubCategory->subCategory_name = $request->subCategory;
        $SubCategory->subCategory_description = $request->description;
        $SubCategory->category_id = $request->category_id; // Save the category_id
        $SubCategory->save();
        toastr()->timeOut(1000)->closeButton()->success('SubCategory added successfully.');
        return redirect()->back();
    }

    public function deleteSubCategory($id)
    {
        $data = SubCategory::find($id);
        $data->delete();
        toastr()->timeOut(1000)->closeButton()->success('SubCategory deleted successfully.');
        return redirect()->back();
    }

    public function editSubCategory($id)
    {
        $data = SubCategory::find($id);
        $categories = Category::all(); // Get all categories for the dropdown
        return view('admin.subCategory.editSubCategory', compact('data', 'categories'));
    }

    public function updatesubCategory(Request $request, $id)
    {
        $data = SubCategory::find($id);
        $data->subCategory_name = $request->subCategory;
        $data->subCategory_description = $request->description;
        $data->category_id = $request->category_id; // Update the category_id
        $data->save();
        toastr()->timeOut(1000)->closeButton()->success('SubCategory edited successfully.');
        return redirect('/subCategory');
    }

}
