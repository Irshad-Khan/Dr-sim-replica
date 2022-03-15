<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\Admin\BrandFaqInterface;
use App\Http\Controllers\Controller;
use App\Http\Requests\brandFaqRequest;
use Illuminate\Http\Request;

class BrandFaqController extends Controller
{
    protected $brandFaqInterface;
    public function __construct(BrandFaqInterface $brandFaqInterface)
    {
        $this->brandFaqInterface = $brandFaqInterface;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.brand_faqs.index', [
            'brandfaqs' => $this->brandFaqInterface->index()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.brand_faqs.create', [
            'mobileBrands' => $this->brandFaqInterface->create(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(brandFaqRequest $request)
    {
        $this->brandFaqInterface->store($request);
        return redirect()->route('brand-faqs.index')
            ->with('success', 'Brand Faq Added Successfully!');
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
            'dashboard.brand_faqs.edit',
            [
                'mobileBrands' => $this->brandFaqInterface->create(),
                'brandFaq' => $this->brandFaqInterface->edit($id)
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
    public function update(brandFaqRequest $request, $id)
    {
        $this->brandFaqInterface->update($request, $id);
        return redirect()->route('brand-faqs.index')
            ->with('success', 'Brand Faq Update Successfully!');
    }

    /**
     * Change status of specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function toggleStatus($status, $id)
    {
        $this->brandFaqInterface->toggleStatus($status, $id);
        return redirect()->back()->with('success', 'Status update Successfully!');
    }
}
