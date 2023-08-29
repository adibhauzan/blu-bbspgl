<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Models\Order;
use App\Models\Status;
use Illuminate\Http\Request;
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
        ]);

        $order->status_id = $request->input('status_id'); 

        $order->save();

        return redirect()->route('showorders')->with('success', 'Data pesanan berhasil diperbarui.');
    }
}