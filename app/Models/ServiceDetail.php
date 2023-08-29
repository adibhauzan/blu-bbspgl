<?php

namespace App\Models;

use App\Models\Order;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ServiceDetail extends Model
{
    use HasFactory;

    protected $fillable = ['services_id', 'image', 'name', 'description'];

    public function service()
    {
        return $this->belongsTo(Service::class, 'services_id', 'id');
    }

    public function order()
    {
        return $this->hasOne(Order::class, 'service_details_id');
    }
}