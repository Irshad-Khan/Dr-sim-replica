<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Contracts\Admin\Auth\AuthInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use App\Http\Requests\AdminProfileUpdateRequest;
use App\Http\Requests\UploadAdminProfileImage;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    protected $authInterface;
    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function showLoginForm()
    {
        if (Auth::guard('admin')->check()) {
            return redirect()->route('dashboard.index')->with('success', 'Welcome to DrSim!');
        }

        return view('dashboard.auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        if ($this->authInterface->login($request)) {
            return redirect()->route('dashboard.index')->with('success', 'Welcome to DrSim!');
        }

        return redirect()->route('admin.login')
            ->with('error', 'Incorrect email or password');
    }

    public function logout()
    {
        $this->authInterface->logout();
        return redirect()->route('admin.login');
    }

    public function showRecoverPasswordForm()
    {
        return view('dashboard.auth.recover_password');
    }

    public function showProfileForm()
    {
        return view('dashboard.auth.profile', [
            'admin' => $this->authInterface->profile()
        ]);
    }

    public function profileUpdate(AdminProfileUpdateRequest $request)
    {
        $this->authInterface->updateProfile($request);
        return redirect()
            ->back()
            ->with('success', 'Profile updated successfully.');
    }

    public function uploadProfilePic(UploadAdminProfileImage $request)
    {
        //
    }

    public function uploadCoverPhoto(UploadAdminProfileImage $request)
    {
        # code...
    }
}
