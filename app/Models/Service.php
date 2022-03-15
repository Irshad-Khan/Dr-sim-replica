<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    use HasFactory;
    protected $fillable = [
        'title',
        'service_type',
        'mobile_brand_id',
        'price_by_brand',
        'mobile_model_id',
        'price_by_model',
        'status',
        'average_time',
        'delivery_time',
        'feature'
    ];

    public function brand()
    {
        return $this->belongsTo(MobileBrand::class, 'mobile_brand_id', 'id');
    }

    public function model()
    {
        return $this->belongsTo(MobileModel::class, 'mobile_model_id', 'id');
    }
}
