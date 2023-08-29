<?php

namespace App\Http\Controllers\Admin\ServiceDetails;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class EditServiceDetailController extends Controller
{
    public function showEditServiceDetail($id)
    {
        $servicedetail = ServiceDetail::findOrFail($id);
        $services = Service::all();

        return view('admin.ServiceDetails.edit', compact('servicedetail', 'services'));
    }

    public function update(Request $request, $id)
    {
        $servicedetail = ServiceDetail::findOrFail($id);

        $request->validate([
            'name' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'services_id' => 'required|exists:services,id',
        ]);

        if ($request->hasFile('image')) {
            $originalImageName = $request->file('image')->getClientOriginalName();
            $imageName = $request->file('image')->storeAs('public/images', $originalImageName);
            $servicedetail->image = Storage::url($imageName);
            $servicedetail->image = $originalImageName;
        }

        $servicedetail->name = $request->input('name');
        $servicedetail->services_id = $request->input('services_id');
        $servicedetail->price_per_day = $request->input('price_per_day');
        $servicedetail->description = $request->input('description');
        $servicedetail->save();

        return redirect()->route('showservicesdetails')->with('success', 'Service detail data successfully updated.');
    }
}
