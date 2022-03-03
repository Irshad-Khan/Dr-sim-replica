<?php

namespace App\Contracts\Admin\Auth;

interface AuthInterface
{
    public function login($request);
    public function profile();
    public function updateProfile($request);
    public function uploadProfilePic($request);
    public function uploadCoverPhoto($request);
    public function logout();
}
