<?php

namespace App\Http\Controllers;

use App\Models\ViewPointPurchaseHistory;
use Illuminate\Http\Request;

class ViewPointPurchaseHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchaseHistory = ViewPointPurchaseHistory::with('service', 'product')->get();
        return response()->json([
            'data' => $purchaseHistory
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
     * @param  \App\Models\ViewPointPurchaseHistory  $viewPointPurchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function show(ViewPointPurchaseHistory $viewPointPurchaseHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ViewPointPurchaseHistory  $viewPointPurchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewPointPurchaseHistory $viewPointPurchaseHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ViewPointPurchaseHistory  $viewPointPurchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewPointPurchaseHistory $viewPointPurchaseHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViewPointPurchaseHistory  $viewPointPurchaseHistory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewPointPurchaseHistory $viewPointPurchaseHistory)
    {
        //
    }
}
