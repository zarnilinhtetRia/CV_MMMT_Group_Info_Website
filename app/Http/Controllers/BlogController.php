<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Type;
use Illuminate\Support\Facades\Auth;


class BlogController extends Controller
{
    public function index()
    {
        $blogs = Blog::with('user')->get();
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
        // Automatically assign the currently logged-in user
        $blogs->user_id = Auth::id();

        // handle image if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/'), $imageName);
            $blogs->image = '/img/' . $imageName;
        }

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

    public function update(Request $request, Blog $blog)
    {
        // Update blog fields except image and user_id
        $blog->fill($request->except(['image', 'user_id']));

        // handle image if uploaded
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($blog->image && file_exists(public_path($blog->image))) {
                unlink(public_path($blog->image));
            }

            // Save new image
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img/'), $imageName);
            $blog->image = '/img/' . $imageName;
        }

        $blog->save();

        return redirect()->route('blogs.index')->with('success', 'Blog updated successfully!');
    }


    public function destroy(string $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect()->back()->with('delete', 'Blog Delete Successful');
    }
}
