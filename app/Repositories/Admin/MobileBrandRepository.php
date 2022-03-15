<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\MobileBrandInterface;
use App\Models\MobileBrand;

class MobileBrandRepository implements MobileBrandInterface
{
    public function index()
    {
        return MobileBrand::withoutGlobalScope('active')
            ->latest()
            ->get();
    }

    public function create()
    {
        return;
    }

    public function store($request)
    {
        $data = $request->except(['_token']);
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('mobile_brands'), $imageName);
            $data['image'] = $imageName;
        }

        MobileBrand::create($data);
    }

    public function edit($id)
    {
        $mobileBrand = MobileBrand::withoutGlobalScope('active')->findOrFail($id);
        if (!$mobileBrand) {
            abort(404);
        }

        return $mobileBrand;
    }

    public function update($request, $id)
    {
        $mobileBrand = MobileBrand::withoutGlobalScope('active')->findOrFail($id);
        if (!$mobileBrand) {
            abort(404);
        }
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('mobile_brands'), $imageName);
            $mobileBrand->image = $imageName;
            $mobileBrand->save();
        }
        $mobileBrand->update($request->except(['_token', '_method', 'image']));
    }

    public function toggleStatus($status, $id)
    {
        $mobileBrand = MobileBrand::withoutGlobalScope('active')->findOrFail($id);
        if (!$mobileBrand) {
            abort(404);
        }

        $mobileBrand->update([
            'status' => !$status
        ]);
    }
}
