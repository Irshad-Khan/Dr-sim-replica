<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\NetworkProviderInterface;
use App\Models\NetworkProvider;
use App\Repositories\Admin\CountryRepository;

class NetworkProviderRepository implements NetworkProviderInterface
{
    public function index()
    {
        return NetworkProvider::latest()->get();
    }

    public function create()
    {
        return (new CountryRepository())->index();
    }

    public function store($request)
    {
        NetworkProvider::create($request->except('_token'));
    }

    public function edit($id)
    {
        $networkProvider = NetworkProvider::findOrFail($id);
        if (!$networkProvider) {
            abort(404);
        }

        return $networkProvider;
    }

    public function update($request, $id)
    {
        $networkProvider = NetworkProvider::findOrFail($id);
        if (!$networkProvider) {
            abort(404);
        }

        $networkProvider->update($request->except(['_token', '_method']));
    }

    public function toggleStatus($status, $id)
    {
        $networkProvider = NetworkProvider::findOrFail($id);
        if (!$networkProvider) {
            abort(404);
        }

        $networkProvider->update([
            'status' => !$status
        ]);
    }
}
