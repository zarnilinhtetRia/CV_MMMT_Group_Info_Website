<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BreakingNews;

class BreakingNewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $breakingnews = BreakingNews::all();
        return view('breakingnews.breakingnews', compact('breakingnews'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'news' => 'required|string|max:191',
        ]);

        BreakingNews::create($request->all());

        return redirect()->route('breakingnews.index')->with('success', 'News created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $breakingnews = BreakingNews::find($id);
        return view('breakingnews.breakingnews_edit', compact('breakingnews'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $breakingnews = BreakingNews::find($id);
        $breakingnews->update($request->all());
        $breakingnews->save();

        return redirect()->route('breakingnews.index')->with('success', 'News updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $breakingnews = BreakingNews::find($id);
        $breakingnews->delete();
        return redirect()->back()->with('delete', 'News Delete Successful');
    }
}
