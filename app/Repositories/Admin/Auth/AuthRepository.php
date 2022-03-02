<?php

namespace App\Repositories\Admin\Auth;

use App\Contracts\Admin\Auth\AuthInterface;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;

class AuthRepository implements AuthInterface
{
    public function login($request)
    {
        $credentials = $request->only('email', 'password');
        $admin = Admin::where('email', $request->email)
            ->where('status', 1)->first();
        if ($admin) {
            if (Auth::guard('admin')->attempt($credentials, $request->remember)) {
                Auth::guard('admin')->login($admin);
                return true;
            }
        }

        return false;
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
    }
}
