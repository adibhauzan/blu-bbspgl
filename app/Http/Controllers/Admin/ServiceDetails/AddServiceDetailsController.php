<?php

namespace App\Http\Controllers\Admin\ServiceDetails;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Http\Controllers\Controller;

class AddServiceDetailsController extends Controller
{
    public function addServiceDetails()
    {
        $services = Service::all();

        return view('admin.servicedetails.addservicedetails', compact('services'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'stock' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'description' => 'required',
            'services_id' => 'required|exists:services,id',
        ]);

        $originalImageName = $request->file('image')->getClientOriginalName();
        $imageName = $request->file('image')->storeAs('public/images', $originalImageName);


        $serviceDetail = new ServiceDetail();
        $serviceDetail->name = $request->name;
        $serviceDetail->stock = $request->stock;
        $serviceDetail->services_id = $request->services_id;
        $serviceDetail->price_per_day = $request->price_per_day;
        $serviceDetail->description = $request->description;
        $serviceDetail->image = $originalImageName;
        $serviceDetail->save();

        return redirect()->route('showservicesdetails')->with('success', 'Service berhasil ditambahkan.');
    }
}
