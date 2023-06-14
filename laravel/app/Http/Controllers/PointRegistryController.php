<?php

namespace App\Http\Controllers;

use App\Models\PointRegistry;
use Illuminate\Http\Request;

class PointRegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pointRegistries = PointRegistry::all();
        
        return response()->json([
            'data' => $pointRegistries
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
     * @param  \App\Models\PointRegistry  $pointRegistry
     * @return \Illuminate\Http\Response
     */
    public function show(PointRegistry $pointRegistry)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PointRegistry  $pointRegistry
     * @return \Illuminate\Http\Response
     */
    public function edit(PointRegistry $pointRegistry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PointRegistry  $pointRegistry
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PointRegistry $pointRegistry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PointRegistry  $pointRegistry
     * @return \Illuminate\Http\Response
     */
    public function destroy(PointRegistry $pointRegistry)
    {
        //
    }
}
