<?php

namespace App\Http\Controllers\Dashboard\Auth;

use App\Contracts\Admin\Auth\AuthInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    protected $authInterface;
    public function __construct(AuthInterface $authInterface)
    {
        $this->authInterface = $authInterface;
    }

    public function showLoginForm()
    {
        return view('dashboard.auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        if ($this->authInterface->login($request)) {
            return redirect()->route('dashboard.index');
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
}
