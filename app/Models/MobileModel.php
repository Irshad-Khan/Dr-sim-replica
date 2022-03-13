<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileModel extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    use HasFactory;
    protected $fillable = ['name', 'image', 'brand_id', 'status'];

    public function brand()
    {
        return $this->belongsTo(MobileBrand::class, 'brand_id', 'id');
    }
}
