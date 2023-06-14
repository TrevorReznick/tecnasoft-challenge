<?php

namespace App\Http\Controllers;

use App\Models\ViewPointInvoice;
use Illuminate\Http\Request;

class ViewPointInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $PointInvoice = ViewPointInvoice::all();
        return response()->json([
            'data' => $PointInvoice
        ]);
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
     * @param  \App\Models\ViewPointInvoice  $viewPointInvoice
     * @return \Illuminate\Http\Response
     */
    public function show(ViewPointInvoice $viewPointInvoice)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ViewPointInvoice  $viewPointInvoice
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewPointInvoice $viewPointInvoice)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ViewPointInvoice  $viewPointInvoice
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewPointInvoice $viewPointInvoice)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViewPointInvoice  $viewPointInvoice
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewPointInvoice $viewPointInvoice)
    {
        //
    }
}
