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
            $image->move(public_path('uploads/blogs'), $imageName);
            $blogs->image = 'uploads/blogs/' . $imageName;
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

    public function update(Request $request,  Blog $blog)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'type_id' => 'required|exists:types,id',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->type_id = $request->type_id;
        $blog->description = $request->description;

        if ($request->hasFile('image')) {
            // Delete old image
            if ($blog->image && file_exists(public_path('storage/blog_images/' . $blog->image))) {
                unlink(public_path('storage/blog_images/' . $blog->image));
            }

            // Save new image
            $imageName = time() . '.' . $request->image->extension();
            $request->image->storeAs('public/blog_images', $imageName);
            $blog->image = $imageName;
        }

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
