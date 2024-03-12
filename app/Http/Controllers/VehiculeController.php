<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function iindex()
{
    $vehicules = Vehicule::all();
    return view('vehicules.iindex')->with('vehicules', $vehicules);
}

}
