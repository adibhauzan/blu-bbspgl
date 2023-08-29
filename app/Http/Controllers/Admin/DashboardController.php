<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $orderCount = Order::count();
        $userCount = User::count(); 
        return view('admin.dashboard', compact('userCount', 'orderCount'));
    }
 
}