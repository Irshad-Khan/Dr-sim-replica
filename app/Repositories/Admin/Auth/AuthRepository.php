<?php

namespace App\Repositories\Admin\Auth;

use App\Contracts\Admin\Auth\AuthInterface;
use App\Http\Traits\AuthTrait;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthRepository implements AuthInterface
{
    use AuthTrait;
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

    public function profile()
    {
        return $this->getLoginUserWithGuard('admin');
    }

    public function updateProfile($request)
    {
        if (!empty($request->password)) {
            $request->request->add(['password' => Hash::make($request->password)]);
            $request = $request->only(['first_name', 'last_name', 'email', 'password']);
        } else {
            $request = $request->only(['first_name', 'last_name', 'email']);
        }
        $this->user()->update($request);
    }

    public function uploadProfilePic($request)
    {
        //
    }

    public function uploadCoverPhoto($request)
    {
        # code...
    }
}
