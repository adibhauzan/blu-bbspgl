<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Http\Controllers\Controller;

class EditOrderController extends Controller
{

    public function showEditOrder($id)
    {
        $order = Order::findOrFail($id);
        $statuses = Status::all();

        return view('admin.transaction.edit', compact('order', 'statuses'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::findOrFail($id);

        $request->validate([
            'status_id' => 'required|exists:statuses,id',
            'order_id' => 'required',
        ]);

        $newStatusId = $request->input('status_id');

        if ($newStatusId == 2 && $order->status_id != 2) {
            $serviceDetail = ServiceDetail::findOrFail($order->service_details_id);
            $serviceDetail->stock -= 1;
            $serviceDetail->save();
        } else if ($newStatusId == 4 && $order->status_id != 4) {
            $serviceDetail = ServiceDetail::findOrFail($order->service_details_id);
            $serviceDetail->stock += 1;
            
            $serviceDetail->save();
        }

        $order->status_id = $newStatusId;
        $order->save();

        return redirect()->route('showorders')->with('success', 'Data pesanan berhasil diperbarui.');
    }
}