<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Type;

class TypeController extends Controller
{
    public function index()
    {
        $types = Type::all();
        return view('type.type',compact('types'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $types = Type::create($request->all());
        $types->save();

        return redirect()->route('types.index');
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        $type = Type::find($id);
        return view('type.type_edit',compact('type'));
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
