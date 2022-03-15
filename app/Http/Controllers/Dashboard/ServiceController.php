<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\ServiceInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceRequest;
use App\Repositories\Admin\MobileBrandRepository;
use App\Repositories\Admin\MobileModelRepository;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    protected $serviceInterface;
    public function __construct(ServiceInterface $serviceInterface)
    {
        $this->serviceInterface = $serviceInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.services.index', [
            'services' => $this->serviceInterface->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.services.create', [
            'mobileBrands' => (new MobileBrandRepository())->index(),
            'mobileModels' => (new MobileModelRepository())->index()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ServiceRequest $request)
    {
        $this->serviceInterface->store($request);
        return redirect()->route('services.index')
            ->with('success', 'Service Added Successfully!');
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
            'dashboard.services.edit',
            [
                'mobileBrands' => (new MobileBrandRepository())->index(),
                'mobileModels' => (new MobileModelRepository())->index(),
                'service' => $this->serviceInterface->edit($id)
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
    public function update(ServiceRequest $request, $id)
    {
        $this->serviceInterface->update($request, $id);
        return redirect()->route('services.index')
            ->with('success', 'Service Update Successfully!');
    }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->serviceInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Status update Successfully!');
    }
}
