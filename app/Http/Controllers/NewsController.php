<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function news()
    {
        $news = News::latest()->get();
        return view('news.news', compact('news'));
    }
    public function newsstore(Request $request)
    {
        $news = News::create($request->all());


        // Handle image upload if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);  // Save to public/img folder
            $news->image = $imageName;
        }

        $news->save();

        return redirect()->back()->with('success', 'News Create Successfully');
    }

    public function new_delete($id)
    {
        $news = News::findOrFail($id);

        // Delete image file if exists
        if ($news->image) {
            $imagePath = public_path('img/' . $news->image);
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        $news->delete();

        return redirect()->back()->with('success', 'News Deleted Successfully');
    }
    public function new_edit($id)
    {
        $news = News::find($id);
        return view('news.news_edit', compact('news'));
    }



    public function new_update(Request $request, News $news)
    {

        $news->fill($request->except(['image', 'user_id']));

        // Handle image upload if new image uploaded
        if ($request->hasFile('image')) {
            // Delete old image file if exists
            if ($news->image && file_exists(public_path('img/' . $news->image))) {
                unlink(public_path('img/' . $news->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $news->image = $imageName;  // Save only filename
        }

        $news->save();

        return redirect('news')->with('success', 'Service updated successfully!');
    }
}
