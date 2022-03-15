<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\MobileModelInterface;
use App\Models\MobileBrand;
use App\Models\MobileModel;

class MobileModelRepository implements MobileModelInterface
{
    public function index()
    {
        return MobileModel::latest()->get();
    }

    public function create()
    {
        return MobileBrand::all();
    }

    public function store($request)
    {
        $data = $request->except(['_token']);
        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('mobile_models'), $imageName);
            $data['image'] = $imageName;
        }

        MobileModel::create($data);
    }

    public function edit($id)
    {
        $mobileModel = MobileModel::findOrFail($id);
        if (!$mobileModel) {
            abort(404);
        }

        return $mobileModel;
    }

    public function update($request, $id)
    {
        $mobileModel = MobileModel::findOrFail($id);
        if (!$mobileModel) {
            abort(404);
        }

        if ($request->has('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('mobile_models'), $imageName);
            $mobileModel->image = $imageName;
            $mobileModel->save();
        }

        $mobileModel->update($request->except(['_token', '_method', 'image']));
    }

    public function toggleStatus($status, $id)
    {
        $mobileModel = MobileModel::findOrFail($id);
        if (!$mobileModel) {
            abort(404);
        }

        $mobileModel->update([
            'status' => !$status
        ]);
    }

    public function upload($request)
    {
        //
    }
}
