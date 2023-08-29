<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AddServicesController extends Controller
{
    public function addServices()
    {
        return view('admin.services.addservices');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        $originalImageName = $request->file('image')->getClientOriginalName();
        $slug = Str::slug($request->name); 
    
        $request->file('image')->storeAs('public/images', $originalImageName);
    
        $service = new Service();
        $service->name = $request->name;
        $service->image = $originalImageName;
        $service->save();
    
        return redirect()->route('showservices')->with('success', 'Service berhasil ditambahkan.');
    }
    
}