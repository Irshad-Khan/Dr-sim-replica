<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NetworkProvider extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 0;

    use HasFactory;
    protected $fillable = ['title', 'country_id', 'status'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
