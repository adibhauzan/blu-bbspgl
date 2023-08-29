<?php

namespace App\Models;

use App\Models\ServiceDetail;
use Illuminate\Foundation\Auth\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Order extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'service_details_id', 'started_at', 'total_price', 'ended_at', 'bukti_pembayaran', 'status_id', 'alamat'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function serviceDetail()
    {
        return $this->belongsTo(ServiceDetail::class, 'service_details_id');
    }
    
    public function status()
    {
        return $this->belongsTo(Status::class, 'status_id');
    }
}