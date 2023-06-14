<?php

namespace App\Http\Controllers;

use App\Models\ViewXyzSellHistory;
use Illuminate\Http\Request;

class ViewXyzSellHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sellHistory = ViewXyzSellHistory::with('service', 'product')->get();

        return response()->json([
            'data' => $sellHistory
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
     * @param  \App\Models\ViewXyzSellHistory  $viewXyzSellHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ViewXyzSellHistory $viewXyzSellHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ViewXyzSellHistory  $viewXyzSellHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewXyzSellHistory $viewXyzSellHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ViewXyzSellHistory  $viewXyzSellHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewXyzSellHistory $viewXyzSellHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViewXyzSellHistory  $viewXyzSellHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewXyzSellHistory $viewXyzSellHistory)
    {
        //
    }
}
