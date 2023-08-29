<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Order;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function showOrders($service_details_id)
    {
        $orders = ServiceDetail::findOrFail($service_details_id);
        return view('user.orders.orders', compact('orders'));
    }


    public function store(Request $request, $service_details_id)
    {
        $validator = Validator::make($request->all(), [
            'started_at' => 'required|date',
            'ended_at' => 'required|date|after_or_equal:started_at',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        $user = Auth::user();
        $started_at = Carbon::createFromFormat('m-d-Y', $request->input('started_at'))->format('Y-m-d');
        $ended_at = Carbon::createFromFormat('m-d-Y', $request->input('ended_at'))->format('Y-m-d');

        $serviceDetail = ServiceDetail::findOrFail($service_details_id);
        $price_per_day = $serviceDetail->price_per_day;

        $days = Carbon::parse($started_at)->diffInDays($ended_at) + 1;
        $total_price = $price_per_day * $days;

        $alamat = $request->input('alamat');

        $order = Order::create([
            'user_id' => $user->id,
            'service_details_id' => $service_details_id,
            'started_at' => $started_at,
            'ended_at' => $ended_at,
            'price_per_day' => $price_per_day,
            'total_price' => $total_price,
            'alamat' => $alamat,
        ]);

        return redirect()->route('confirmation.order', ['order_id' => $order->id]);
    }


    public function showStatusOrder()
    {
        $user = auth()->user();
        $orders = Order::where('user_id', $user->id)->get();

        return view('user.statusorder', compact('orders'));
    }
}