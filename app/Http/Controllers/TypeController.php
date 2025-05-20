<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;
use App\Models\Category;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::with('category')->get();
        $categories = Category::all();
        return view('type.type', compact('types', 'categories'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required|string|max:191',
            'category_id' => 'nullable|exists:categories,id',
        ]);

        Type::create($request->only('type', 'category_id'));

        return redirect()->route('types.index')->with('success', 'Type created successfully.');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $type = Type::find($id);
        return view('type.type_edit', compact('type'));
    }

    public function update(Request $request, string $id)
    {
        $type = Type::find($id);
        $type->update($request->all());
        $type->save();

        return redirect()->route('types.index');
    }

    public function destroy(string $id)
    {
        $type = Type::find($id);
        $type->delete();
        return redirect()->back()->with('delete', 'Type Delete Successful');
    }
}
