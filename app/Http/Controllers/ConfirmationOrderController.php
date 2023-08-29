<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class ConfirmationOrderController extends Controller
{
    public function showConfirmation($order_id)
    {
        $order = Order::findOrFail($order_id);

        return view('user.orders.konfirmasi', compact('order'));
    }

    public function storeConfirmation(Request $request, $order_id)
    {
        $request->validate([
            'bukti_pembayaran' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $order = Order::findOrFail($order_id);

        $originalImageName = $request->file('bukti_pembayaran')->getClientOriginalName();
        $request->file('bukti_pembayaran')->storeAs('public/images', $originalImageName);

        $order->bukti_pembayaran = $originalImageName;
        $order->save();

        return redirect()->route('statusorder')->with('success', 'Bukti pembayaran berhasil diunggah.');
    }
}