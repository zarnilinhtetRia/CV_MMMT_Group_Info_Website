<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        return view('category.category',compact('categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request);
        $categories = Category::create($request->all());
        $categories->save();

        return redirect()->route('categories.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {

        // echo $id;
        $category = Category::find($id);
        // dd($category);
        return view('category.category_edit',compact('category'));
    }

    public function update(Request $request, string $id)
    {
        // dd($request);

        $category = Category::find($id);
        $category->update($request->all());
        $category->save();

        return redirect()->route('categories.index');
    }

    public function destroy(string $id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect()->back()->with('delete', 'Category Delete Successful');
    }
}
