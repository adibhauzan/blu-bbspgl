<?php

namespace App\Http\Controllers\Admin\Transaction;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HistoryController extends Controller
{
    public function showHistory()
    {
        $historyList = Order::all();

        return view('admin.transaction.history', compact('historyList'));
    }

    public function destroy($id)
    {
        $history = Order::find($id);
        if (!$history) {
            return redirect()->route('showhistory')->with('error', 'Data tidak ditemukan.');
        }

        $history->delete();

        return redirect()->route('showhistory')->with('success', 'Data berhasil dihapus.');
    }
}