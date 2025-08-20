<?php

namespace App\Http\Controllers;

use App\Models\Award;
use Illuminate\Http\Request;

class AwardController extends Controller
{
    public function awards()
    {
        $awards = Award::latest()->get();
        return view('awards.award', compact('awards'));
    }

    public function awardstore(Request $request)
    {
        $awards = Award::create($request->all());


        // Handle image upload if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);  // Save to public/img folder
            $awards->image = $imageName;
        }

        $awards->save();

        return redirect()->back()->with('success', 'Award Create Successfully');
    }

    public function award_delete($id)
    {
        $award = Award::findOrFail($id);

        // Delete image file if exists
        if ($award->image && file_exists(public_path('img/' . $award->image))) {
            unlink(public_path('img/' . $award->image));
        }

        $award->delete();

        return redirect()->back()->with('success', 'Award Deleted Successfully');
    }

    public function award_edit($id)
    {
        $awards = Award::find($id);
        return view('awards.award_edit', compact('awards'));
    }

    public function award_update(Request $request, Award $award)
    {

        $award->fill($request->except(['image', 'user_id']));

        // Handle image upload if new image uploaded
        if ($request->hasFile('image')) {
            // Delete old image file if exists
            if ($award->image && file_exists(public_path('img/' . $award->image))) {
                unlink(public_path('img/' . $award->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $award->image = $imageName;  // Save only filename
        }

        $award->save();

        return redirect('awards')->with('success', 'Award updated successfully!');
    }
}
