<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EditServiceController extends Controller
{
    public function showEditService($id)
    {
        $services = Service::findOrFail($id);

        return view('admin.services.edit', compact('services'));
    }

    public function update(Request $request, $id)
    {
        $services = Service::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);


        if ($request->hasFile('image')) {
            $originalImageName = $request->file('image')->getClientOriginalName();
            $imageName = $request->file('image')->storeAs('public/images', $originalImageName);
            $services->image = Storage::url($imageName);
            $services->image = $originalImageName;
        }

        $services->name = $request->input('name');
        $services->save();

        return redirect()->route('showservices')->with('success', 'Service detail data successfully updated.');
    }
}
