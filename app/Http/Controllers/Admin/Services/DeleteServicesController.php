<?php

namespace App\Http\Controllers\Admin\Services;

use App\Models\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteServicesController extends Controller
{
    public function destroy($id)
    {
        $service = Service::find($id);
        if (!$service) {
            return redirect()->route('showservices')->with('error', 'Data tidak ditemukan.');
        }

        $service->delete();

        return redirect()->route('showservices')->with('success', 'Data berhasil dihapus.');
    }
}