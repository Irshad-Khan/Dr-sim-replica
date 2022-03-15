<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BrandFaq extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    use HasFactory;

    protected $fillable = [
        'title',
        'answer',
        'mobile_brand_id',
        'status',
    ];

    public function brand()
    {
        return $this->belongsTo(MobileBrand::class, 'mobile_brand_id', 'id');
    }
}
