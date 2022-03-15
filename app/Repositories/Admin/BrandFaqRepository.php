<?php

namespace App\Repositories\Admin;

use App\Contracts\Admin\BrandFaqInterface;
use App\Models\BrandFaq;

class BrandFaqRepository implements BrandFaqInterface
{
    public function index()
    {
        return BrandFaq::latest()->get();
    }

    public function create()
    {
        return (new MobileBrandRepository())->index();
    }

    public function store($request)
    {
        BrandFaq::create($request->except('_token'));
    }

    public function edit($id)
    {
        $brandFaq = BrandFaq::findOrFail($id);
        if (!$brandFaq) {
            abort(404);
        }
        return $brandFaq;
    }

    public function update($request, $id)
    {
        $brandFaq = BrandFaq::findOrFail($id);
        if (!$brandFaq) {
            abort(404);
        }

        $brandFaq->update($request->except(['_token', '_method']));
    }

    public function toggleStatus($status, $id)
    {
        $brandFaq = BrandFaq::findOrFail($id);
        if (!$brandFaq) {
            abort(404);
        }

        $brandFaq->update([
            'status' => !$status
        ]);
    }
}
