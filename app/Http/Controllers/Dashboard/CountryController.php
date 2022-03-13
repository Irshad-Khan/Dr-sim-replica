<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\CountryInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\CountryRequest;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    protected $countryInterface;
    public function __construct(CountryInterface $countryInterface)
    {
        $this->countryInterface = $countryInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.countries.index', [
            'countries' => $this->countryInterface->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function create()
    // {
    //     return view('dashboard.countries.create', [
    //         'country' => $this->countryInterface->create()
    //     ]);
    // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(CountryRequest $request)
    // {
    //     $this->countryInterface->store($request);
    //     return redirect()->route('countries.index')
    //         ->with('success', 'Country Added Successfully!');
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function show($id)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function edit($id)
    // {
    //     return view(
    //         'dashboard.countries.edit',
    //         [
    //             'country' => $this->countryInterface->edit($id),
    //         ]
    //     );
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // public function update(CountryRequest $request, $id)
    // {
    //     $this->countryInterface->update($request, $id);
    //     return redirect()->route('countries.index')->with('success', 'Country Update Successfully!');
    // }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->countryInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Country update Successfully!');
    }
}
