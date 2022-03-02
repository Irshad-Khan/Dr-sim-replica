<?php

namespace App\Contracts\Admin\Auth;

interface AuthInterface
{
    public function login($request);
    public function logout();
}
