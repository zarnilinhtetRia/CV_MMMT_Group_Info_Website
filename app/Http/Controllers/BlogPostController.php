<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Type;
use App\Models\Comment;
use App\Models\Reaction;
use Illuminate\Support\Facades\Auth;



class BlogPostController extends Controller
{
    public function blog_post(Request $request)
    {
        $categories = Category::all();
        $types = Type::all();

        $query = Blog::with(['category', 'type'])->withCount('comments');

        if ($request->filled('title')) {
            $query->where('title', 'like', '%' . $request->title . '%');
        }
        if ($request->filled('category')) {
            $query->where('category_id', $request->category);
        }
        if ($request->filled('type')) {
            $query->where('type_id', $request->type);
        }

        $blogs = $query->get();

        $breakingNews = Blog::latest()->take(4)->get();

        return view('frontend.frontend', compact('blogs', 'categories', 'types', 'breakingNews'));
    }

    public function blog_post_detail($id)
    {
        // $blog = Blog::find($id);
        $blog = Blog::with(['category', 'type', 'comments.user'])->withCount('comments')->findOrFail($id);
        $categories = Category::with('types')->get();
        // $types = Type::all();

        $recentPosts = Blog::with(['comments.user']) // ✅ Eager load comments with user
            ->withCount('comments')                  // ✅ Count comments
            ->where('category_id', $blog->category_id)
            ->where('id', '!=', $id)
            ->orderBy('created_at', 'desc')
            ->take(3)
            ->get();


        return view('frontend.detail', compact('blog', 'recentPosts', 'categories'));
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
