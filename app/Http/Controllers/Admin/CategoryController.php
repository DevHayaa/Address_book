<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use Flasher\Toastr\Prime\ToastrInterface;

class CategoryController extends Controller
{
    public function category()
    {
        $data = category::all();
        return view('admin.category.category',compact('data'));
    }
    public function addCategory()
    {
        return view('admin.category.addCategory');
    }

    public function store(Request $request)
    {
        $category = new category;
        $category->category_name = $request->category;
        $category->category_description = $request->description;
        $category->save();
        toastr()->timeOut(1000)->closeButton()->success('Category added succesfully.');
        return redirect()->route('category');
    }

    public function deleteCategory($id)
    {
        $data = category::find($id);
        $data->delete();
        toastr()->timeOut(1000)->closeButton()->success('Category deleted succesfully.');
        return redirect()->back();
    }

    public function editCategory($id)
    {
        $data = category::find($id);
        return view('admin.category.editCategory',compact('data'));
    }

    public function updateCategory(Request $request,$id)
    {
        $data = category::find($id);
        $data->category_name= $request->category;
        $data->category_description= $request->description;
        $data->save();
        toastr()->timeOut(1000)->closeButton()->success('Category edited succesfully.');
        return redirect('/category');
       
    }
}
