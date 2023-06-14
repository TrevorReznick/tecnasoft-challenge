<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\XyzCentre;

class XyzCentreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function validatePoint()
    {
        $xyzCentre = XyzCentre::find(1);

        if ($xyzCentre->isActive()) {
            // il campo is_active è attivo
        } else {
            // il campo is_active non è attivo
        }
    }

}
