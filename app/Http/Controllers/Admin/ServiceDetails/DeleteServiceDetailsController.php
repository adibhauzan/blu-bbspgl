<?php

namespace App\Http\Controllers\Admin\ServiceDetails;

use Illuminate\Http\Request;
use App\Models\ServiceDetail;
use App\Http\Controllers\Controller;

class DeleteServiceDetailsController extends Controller
{
    public function destroy($id)
    {
        $serviceDetail = ServiceDetail::find($id);
        if (!$serviceDetail) {
            return redirect()->route('showservicesdetails')->with('error', 'Data tidak ditemukan.');
        }

        if ($serviceDetail->order) {
            return redirect()->route('showservicesdetails')->with('error', 'Tidak dapat menghapus, ada pesanan terkait.');
        }

        $serviceDetail->delete();

        return redirect()->route('showservicesdetails')->with('success', 'Data berhasil dihapus.');
    }
}