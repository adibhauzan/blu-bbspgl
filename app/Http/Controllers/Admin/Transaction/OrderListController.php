<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Http\Controllers\Controller;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderListController extends Controller
{
    public function showOrders(){
        $ordersList = Order::all();
 
        return view('admin.transaction.orders', compact('ordersList'));
    }

    public function destroy($id)
    {
        $orders = Order::find($id);
        if (!$orders) {
            return redirect()->route('showservicesdetails')->with('error', 'Data tidak ditemukan.');
        }

        $orders->delete();

        return redirect()->route('showorders')->with('success', 'Data berhasil dihapus.');
    }
}