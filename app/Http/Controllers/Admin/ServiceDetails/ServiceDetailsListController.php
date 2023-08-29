<?php

namespace App\Http\Controllers\Admin\ServiceDetails;

use App\Http\Controllers\Controller;
use App\Models\ServiceDetail;
use Illuminate\Http\Request;

class ServiceDetailsListController extends Controller
{
    public function showServiceDetails(){
        $serviceDetailsList = ServiceDetail::all();
 
        return view('admin.servicedetails.servicedetailslist', compact('serviceDetailsList'));
    }
    
}