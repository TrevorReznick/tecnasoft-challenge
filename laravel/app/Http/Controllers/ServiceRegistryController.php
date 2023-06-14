<?php

namespace App\Http\Controllers;

use App\Models\ServiceRegistry;
use Illuminate\Http\Request;

class ServiceRegistryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = ServiceRegistry::all();
        
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
     * @param  \App\Models\ServiceRegistryController  $serviceRegistryController
     * @return \Illuminate\Http\Response
     */
    public function show(ServiceRegistryController $serviceRegistryController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ServiceRegistryController  $serviceRegistryController
     * @return \Illuminate\Http\Response
     */
    public function edit(ServiceRegistryController $serviceRegistryController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ServiceRegistryController  $serviceRegistryController
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ServiceRegistryController $serviceRegistryController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ServiceRegistryController  $serviceRegistryController
     * @return \Illuminate\Http\Response
     */
    public function destroy(ServiceRegistryController $serviceRegistryController)
    {
        //
    }
}
