<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\CustomerInterface;
use App\Models\User;

class CustomerRepository implements CustomerInterface
{
    public function index()
    {
        return User::latest()->get();
    }

    public function create()
    {
        return (new CountryRepository())->index();
    }

    public function store($request)
    {
        User::create($request->except('_token'));
    }

    public function edit($id)
    {
        $customer = User::findOrFail($id);
        if (!$customer) {
            abort(404);
        }

        return $customer;
    }

    public function update($request, $id)
    {
        $customer = User::findOrFail($id);
        if (!$customer) {
            abort(404);
        }

        $customer->update($request->except(['_token', '_method']));
    }

    public function toggleStatus($status, $id)
    {
        $customer = User::findOrFail($id);
        if (!$customer) {
            abort(404);
        }

        $customer->update([
            'status' => !$status
        ]);
    }
}
