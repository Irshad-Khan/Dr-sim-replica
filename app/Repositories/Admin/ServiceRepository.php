<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\ServiceInterface;
use App\Models\Service;

class ServiceRepository implements ServiceInterface
{
    public function index()
    {
        return Service::latest()->get();
    }

    public function create()
    {
        //
    }

    public function store($request)
    {
        Service::create($request->except('_token'));
    }

    public function edit($id)
    {
        $serivce = Service::findOrFail($id);
        if (!$serivce) {
            abort(404);
        }
        return $serivce;
    }

    public function update($request, $id)
    {
        $serivce = Service::findOrFail($id);
        if (!$serivce) {
            abort(404);
        }

        $serivce->update($request->except(['_token', '_method']));
    }

    public function toggleStatus($status, $id)
    {
        $serivce = Service::findOrFail($id);
        if (!$serivce) {
            abort(404);
        }

        $serivce->update([
            'status' => !$status
        ]);
    }
}
