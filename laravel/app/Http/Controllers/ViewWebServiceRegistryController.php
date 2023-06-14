<?php

namespace App\Http\Controllers;

use App\Models\ViewWebServiceRegistry;
use Illuminate\Http\Request;

class ViewWebServiceRegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = ViewWebServiceRegistry::all();
        
        return response()->json([
            'data' => $services
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
     * @param  \App\Models\ViewWebServiceRegistry  $viewWebServiceRegistry
     * @return \Illuminate\Http\Response
     */
    public function show(ViewWebServiceRegistry $viewWebServiceRegistry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ViewWebServiceRegistry  $viewWebServiceRegistry
     * @return \Illuminate\Http\Response
     */
    public function edit(ViewWebServiceRegistry $viewWebServiceRegistry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ViewWebServiceRegistry  $viewWebServiceRegistry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ViewWebServiceRegistry $viewWebServiceRegistry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViewWebServiceRegistry  $viewWebServiceRegistry
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViewWebServiceRegistry $viewWebServiceRegistry)
    {
        //
    }
}
