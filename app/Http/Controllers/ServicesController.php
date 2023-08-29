<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index()
    {
        $servicesList = Service::all();

        return view('user.services.services', compact('servicesList'));
    }

   
}