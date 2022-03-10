<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileBrand extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 1;

    use HasFactory;

    protected $fillable = ['title', 'image', 'status'];
}
