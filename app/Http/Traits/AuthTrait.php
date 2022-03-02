<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\Auth;

trait AuthTrait
{
    public function getLoginUserWithGuard($guard)
    {
        return Auth::guard($guard)->user();
    }

    public function user()
    {
        return Auth::user();
    }
}
