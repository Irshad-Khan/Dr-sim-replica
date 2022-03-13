<?php

namespace App\Models;

use App\Scopes\ActiveScope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileBrand extends Model
{
    const ACTIVE = 1;
    const INACTIVE = 1;

    use HasFactory;

    protected $fillable = ['title', 'image', 'status'];

    protected static function boot()
    {
        parent::boot();
        static::addGlobalScope('active', function (Builder $builder) {
            $builder->whereStatus(1);
        });
    }
}
