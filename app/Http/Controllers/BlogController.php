<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Type;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        $types = Type::all();
        return view('blog.blog', compact('blogs', 'categories', 'types'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // dd($request);
        $blogs = Blog::create($request->all());
        $blogs->save();

        return redirect()->route('blogs.index');
    }

    public function show(string $id)
    {
        $blog = Blog::find($id);
        return view('blog.blog_detail', compact('blog'));
    }

    public function edit(string $id)
    {
        $blog = Blog::find($id);
        $categories = Category::all();
        $types = Type::all();

        return view('blog.blog_edit', compact('blog', 'categories', 'types'));
    }

    public function update(Request $request, string $id)
    {
        $blog = Blog::find($id);
        $blog->update($request->all());
        $blog->save();

        return redirect()->route('blogs.index');
    }

    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('delete', 'Blog Delete Successful');
    }
}
