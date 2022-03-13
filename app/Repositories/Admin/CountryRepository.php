<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\CountryInterface;
use App\Models\Country;

class CountryRepository implements CountryInterface
{
    public function index()
    {
        return Country::withoutGlobalScope('active')->orderBy('name', 'ASC')->get();
    }

    public function create()
    {
        return;
    }

    public function store($request)
    {
        Country::create($request->except('_token'));
    }

    public function edit($id)
    {
        $country = Country::withoutGlobalScope('active')->findOrFail($id);
        if (!$country) {
            abort(404);
        }

        return $country;
    }

    public function update($request, $id)
    {
        $country = Country::withoutGlobalScope('active')->findOrFail($id);
        if (!$country) {
            abort(404);
        }

        $country->update($request->except(['_token', '_method']));
    }

    public function toggleStatus($status, $id)
    {
        $country = Country::withoutGlobalScope('active')->findOrFail($id);
        if (!$country) {
            abort(404);
        }

        $country->update([
            'status' => !$status
        ]);
    }
}
