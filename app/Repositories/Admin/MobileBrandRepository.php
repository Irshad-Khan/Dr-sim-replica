<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\MobileBrandInterface;
use App\Models\MobileBrand;

class MobileBrandRepository implements MobileBrandInterface
{
    public function index()
    {
        return MobileBrand::latest()->get();
    }

    public function create()
    {
        return;
    }

    public function store($request)
    {
        MobileBrand::create($request->except('_token'));
    }

    public function edit($id)
    {
        $mobileBrand = MobileBrand::findOrFail($id);
        if (!$mobileBrand) {
            abort(404);
        }

        return $mobileBrand;
    }

    public function update($request, $id)
    {
        $mobileBrand = MobileBrand::findOrFail($id);
        if (!$mobileBrand) {
            abort(404);
        }

        $mobileBrand->update($request->except(['_token', '_method']));
    }

    public function toggleStatus($status, $id)
    {
        $mobileBrand = MobileBrand::findOrFail($id);
        if (!$mobileBrand) {
            abort(404);
        }

        $mobileBrand->update([
            'status' => !$status
        ]);
    }

    public function upload($request)
    {
        dd($request->all()); // TODO
    }
}
