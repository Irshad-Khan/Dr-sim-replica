<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\NetworkProviderInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\NetworkProviderRequest;
use Illuminate\Http\Request;

class NetworkProviderController extends Controller
{
    protected $networkProviderInterface;
    public function __construct(NetworkProviderInterface $networkProviderInterface)
    {
        $this->networkProviderInterface = $networkProviderInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.network_providers.index', [
            'networkProviders' => $this->networkProviderInterface->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.network_providers.create', [
            'countries' => $this->networkProviderInterface->create()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NetworkProviderRequest $request)
    {
        $this->networkProviderInterface->store($request);
        return redirect()->route('network-providers.index')
            ->with('success', 'Network Provider Added Successfully!');
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
            'dashboard.network_providers.edit',
            [
                'networkProvider' => $this->networkProviderInterface->edit($id),
                'countries' => $this->networkProviderInterface->create()
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
    public function update(NetworkProviderRequest $request, $id)
    {
        $this->networkProviderInterface->update($request, $id);
        return redirect()->route('network-providers.index')->with('success', 'Network Provider Update Successfully!');
    }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->networkProviderInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Status update Successfully!');
    }
}
