<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Award;
use App\Models\News;

class FrontendController extends Controller
{
    public function our_awards()
    {

        $highlights = Award::latest()->get();
        return view('frontend.our_awards', compact('highlights'));
    }

    public function news()
    {
        $news = News::latest()->paginate(9);
        return view('frontend.news', compact('news'));
    }
    public function index(Request $request)
    {
        $query = News::query();

        if ($request->has('search') && !empty($request->search)) {
            $search = $request->search;
            $query->where('name', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
        }

        $news = $query->latest()->paginate(9); // 9 items per page

        return view('frontend.news', compact('news'));
    }
}
