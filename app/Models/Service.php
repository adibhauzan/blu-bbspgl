<?php

namespace App\Models;

use App\Models\ServiceDetail;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'image'];

    public function serviceDetails()
    {
        return $this->hasMany(ServiceDetail::class, 'services_id', 'id');
    }
}