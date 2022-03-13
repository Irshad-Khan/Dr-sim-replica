<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\MobileModelInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\MobileModelRequest;
use App\Http\Requests\UploadImageRequst;

class MobileModelController extends Controller
{
    protected $mobileModelInterface;
    public function __construct(MobileModelInterface $mobileModelInterface)
    {
        $this->mobileModelInterface = $mobileModelInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.mobile_models.index', [
            'mobileModels' => $this->mobileModelInterface->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.mobile_models.create', [
            'mobileBrands' => $this->mobileModelInterface->create()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MobileModelRequest $request)
    {
        $this->mobileModelInterface->store($request);
        return redirect()->route('mobile-models.index')
            ->with('success', 'Mobile Model Added Successfully!');
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
            'dashboard.mobile_models.edit',
            [
                'mobileModel' => $this->mobileModelInterface->edit($id),
                'mobileBrands' => $this->mobileModelInterface->create()
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
    public function update(MobileModelRequest $request, $id)
    {
        $this->mobileModelInterface->update($request, $id);
        return redirect()->route('mobile-models.index')->with('success', 'Mobile Model Update Successfully!');
    }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->mobileModelInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Mobile Model update Successfully!');
    }
}
