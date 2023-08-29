<?php

namespace App\Http\Controllers;

use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailsController extends Controller
{
    public function showServiceDetails($service_id)
    {
        $serviceDetails = ServiceDetail::where('services_id', $service_id)->get();
        return view('user.servicedetails.service-details', compact('serviceDetails'));
    }
}