<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\CustomerInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CustomerStoreRequest;
use App\Http\Requests\CustomerUpdateRequest;
use App\Models\User;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    protected $customerInterface;

    function __construct(CustomerInterface $customerInterface)
    {
        $this->customerInterface = $customerInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view(
            'dashboard.customers.index',
            [
                'customers' => $this->customerInterface->index()
            ]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view(
            'dashboard.customers.create',
            [
                'countries' => $this->customerInterface->create()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CustomerStoreRequest $request)
    {
        $this->customerInterface->store($request);
        return redirect()->route('customers.index')->with('success', 'Customer Added Successfully!');
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
            'dashboard.customers.edit',
            [
                'customer' => $this->customerInterface->edit($id),
                'countries' => $this->customerInterface->create()
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
    public function update(CustomerUpdateRequest $request, $id)
    {
        $this->customerInterface->update($request, $id);
        return redirect()->route('customers.index')->with('success', 'Customer Update Successfully!');
    }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->customerInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Status update Successfully!');
    }
}
