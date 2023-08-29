<?php

namespace App\Http\Controllers\Admin\Services;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;

class ServicesListController extends Controller
{
    public function showServices()
    {
        $servicesList = Service::all();

        return view('admin.services.serviceslist', compact('servicesList'));
    }
}
