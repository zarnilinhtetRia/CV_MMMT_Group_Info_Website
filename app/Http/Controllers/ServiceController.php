<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function service()
    {
        $service = Service::latest()->get();
        return view('service.service', compact('service'));
    }
    public function servicestore(Request $request)
    {
        $service = Service::create($request->all());


        // Handle image upload if uploaded
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);  // Save to public/img folder
            $service->image = $imageName;
        }

        $service->save();

        return redirect()->back()->with('success', 'Service Create Successfully');
    }

    public function service_delete($id)
    {
        $service = Service::findOrFail($id);

        // Delete image file if exists
        if ($service->image && file_exists(public_path('img/' . $service->image))) {
            unlink(public_path('img/' . $service->image));
        }

        $service->delete();

        return redirect()->back()->with('success', 'Service Deleted Successfully');
    }

    public function service_edit($id)
    {
        $service = Service::find($id);
        return view('service.serviceedit', compact('service'));
    }

    public function service_update(Request $request, Service $service)
    {

        $service->fill($request->except(['image', 'user_id']));

        // Handle image upload if new image uploaded
        if ($request->hasFile('image')) {
            // Delete old image file if exists
            if ($service->image && file_exists(public_path('img/' . $service->image))) {
                unlink(public_path('img/' . $service->image));
            }

            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('img'), $imageName);
            $service->image = $imageName;  // Save only filename
        }

        $service->save();

        return redirect('service')->with('success', 'Service updated successfully!');
    }
}
