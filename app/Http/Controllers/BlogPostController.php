<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Type;
use App\Models\Comment;
use App\Models\Reaction;
use App\Models\BreakingNews;
use Illuminate\Support\Facades\Auth;



class BlogPostController extends Controller
{


    public function blog_post(Request $request)
    {
        $categories = Category::all();
        $types = Type::all();
        $blog = Blog::latest()->get();
        return view('frontend.home', compact('categories', 'types', 'blog'));
    }
    public function blog_post_detail($id)
    {
        $categories = Category::all();
        $types = Type::all();
        $blog_detail = Blog::findOrFail($id);

        return view('frontend.blog_detail', compact('blog_detail', 'categories', 'types'));
    }

    public function allnews(Request $request)
    {
        $categories = Category::all();
        $types = Type::all();
        $query = Blog::with(['category', 'type'])->withCount('comments');

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }
        if ($request->filled('category')) {
            /**
             * Display the blog post page with all categories and types.
             *
             * @param \Illuminate\Http\Request $request
             * @return \Illuminate\View\View
             */

            /*************  ✨ Windsurf Command ⭐  *************/
            /*******  80c62d66-9e14-44bf-a6a4-7ccf8c053cf4  *******/
            $query->where('category_id', $request->category);
        }
        if ($request->filled('type')) {
            $query->where('type_id', $request->type);
        }

        $blogs = $query->get();
        return view('frontend.allnews', compact('categories', 'types', 'blogs'));
    }

    public function searchBlog(Request $request)
    {
        $query = $request->get('query');
        $blogs = Blog::where('title', 'like', "%{$query}%")->limit(5)->get();

        $output = '<ul class="list-group">';
        if ($blogs->count() > 0) {
            foreach ($blogs as $blog) {
                $output .= '<li class="list-group-item">' . $blog->title . '</li>';
            }
        } else {
            $output .= '<li class="list-group-item">No results found</li>';
        }
        $output .= '</ul>';

        return response()->json($output);
    }

    public function storeComment(Request $request)
    {
        $request->validate([
            'blogpost_id' => 'required|exists:blogs,id',
            'comment' => 'required|string|max:1000',
        ]);

        Comment::create([
            'blogpost_id' => $request->blogpost_id,
            'user_id' => Auth::id(),
            'comment' => $request->comment,
        ]);

        return back()->with('success', 'Comment posted successfully!');
    }

    public function editComment(Comment $comment)
    {
        if ($comment->user_id !== Auth::id()) {
            abort(403);
        }

        return view('frontend.comment_edit', compact('comment'));
    }

    public function updateComment(Request $request, Comment $comment)
    {
        if (Auth::id() !== $comment->user_id) {
            return response()->json(['success' => false, 'message' => 'Unauthorized'], 403);
        }

        $request->validate([
            'comment' => 'required|string'
        ]);

        $comment->update([
            'comment' => $request->comment
        ]);

        return response()->json(['success' => true]);
    }


    public function deleteComment(Comment $comment)
    {
        if ($comment->user_id !== Auth::id()) {
            abort(403);
        }

        $comment->delete();

        return back()->with('success', 'Comment deleted successfully!');
    }
}
