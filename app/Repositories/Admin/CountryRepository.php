<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\CountryInterface;
use App\Models\Country;

class CountryRepository implements CountryInterface
{
    public function index()
    {
        return Country::all();
    }
}
