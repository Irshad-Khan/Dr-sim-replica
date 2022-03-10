<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\MobileBrandInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\MobileBrandImageUploadRequest;
use App\Http\Requests\MobileBrandRequest;
use Illuminate\Http\Request;

class MobileBrandController extends Controller
{
    protected $mobileBrandInterface;
    public function __construct(MobileBrandInterface $mobileBrandInterface)
    {
        $this->mobileBrandInterface = $mobileBrandInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mobile_brands.index', [
            'mobileBrands' => $this->mobileBrandInterface->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mobile_brands.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MobileBrandRequest $request)
    {
        $this->mobileBrandInterface->store($request);
        return redirect()->route('mobile-brands.index')
            ->with('success', 'Mobile Brand Added Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view(
            'dashboard.mobile_brands.edit',
            [
                'mobileBrand' => $this->mobileBrandInterface->edit($id)
            ]
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(MobileBrandRequest $request, $id)
    {
        $this->mobileBrandInterface->update($request, $id);
        return redirect()->route('mobile-brands.index')->with('success', 'Mobile Brand Update Successfully!');
    }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->mobileBrandInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Mobile Brand update Successfully!');
    }

    public function upload(MobileBrandImageUploadRequest $request)
    {
        $this->mobileBrandInterface->upload($request);
    }
}
