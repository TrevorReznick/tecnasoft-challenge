<?php

namespace App\Http\Controllers;

use App\Models\XyzPriceList;
use Illuminate\Http\Request;

class XyzPriceListController extends Controller
{
    

    public function index(ServiceRegistry $serviceRegistry)
    {
        $xyzPriceLists = $serviceRegistry->xyzPriceLists;

        return response()->json([
            'data' => $xyzPriceLists
        ]);
    }

    /*
    public function create(ServiceRegistry $serviceRegistry)
    {
        return view('xyz-price-list.create', compact('serviceRegistry'));
    }

    */

    public function store(Request $request, ServiceRegistry $serviceRegistry)
    {
        $validatedData = $request->validate([
            'p_price_list' => 'required|numeric',
            'xyz_price' => 'required|numeric',
        ]);

        $validatedData['s_id'] = $serviceRegistry->id;

        XyzPriceList::create($validatedData);

        //return redirect()->route('service-registry.show', ['service_registry' => $serviceRegistry]);
    }
}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\XyzPriceList  $xyzPriceList
     * @return \Illuminate\Http\Response
     */
    public function show(XyzPriceList $xyzPriceList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\XyzPriceList  $xyzPriceList
     * @return \Illuminate\Http\Response
     */
    public function edit(XyzPriceList $xyzPriceList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\XyzPriceList  $xyzPriceList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, XyzPriceList $xyzPriceList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\XyzPriceList  $xyzPriceList
     * @return \Illuminate\Http\Response
     */
    public function destroy(XyzPriceList $xyzPriceList)
    {
        //
    }
}
