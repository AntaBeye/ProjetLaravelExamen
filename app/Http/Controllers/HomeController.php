<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Vehicule;
use App\Models\Chauffeur;
 
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('client.home');
    }

    public function indexx()
    {
        $vehicules = Vehicule::all();
        return view ('client.vehicules',compact('vehicules'));
    }


    public function indeexx()
    {
        return view ('client.paiements');
    }

    public function indexxx()
    {
        return view ('client.locations');
    }

    public function indeexxx()
    {
        return view ('client.detailsvehicules');
    }

 
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
        return view('admin.adminHome');
    }

    public function listeVehicule()
    {
        $vehicules = Vehicule::all();
        $chauffeurs = Chauffeur::all();
        return view('admin.listeVehicule',compact('vehicules','chauffeurs'));
    }
    
    public function listeClient()
    {
        return view('admin.listeClient');
    }
    
    public function listeChauffeur()
    {
        $chauffeurs = Chauffeur::all();
        return view('admin.listeChauffeur',compact('chauffeurs'));
    }
}