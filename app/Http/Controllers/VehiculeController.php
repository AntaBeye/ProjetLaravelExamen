<?php

namespace App\Http\Controllers;
use App\Models\Vehicule;
use App\Models\Chauffeur;
use App\Models\Location;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class VehiculeController extends Controller
{
    public function index()
{
    $vehicules = Vehicule::all();
    $chauffeurs = Chauffeur::all();
    return view('admin.listeVehicule', compact('vehicules','chauffeurs'));
}
public function create()
    {
        // Récupérer tous les chauffeurs depuis la base de données
        $chauffeurs = Chauffeur::all();
        // Retourner la vue du formulaire de création de véhicule en passant les chauffeurs récupérés
        return view('vehicules.create')->with('chauffeurs', $chauffeurs);
    }

    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'date_achat' => 'required|date',
            'km_defaut' => 'required|integer',
            'matricule' => 'required|string',
            'photo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'statut' => 'required|in:disponible,location,panne',
            'chauffeur_id' => 'nullable|exists:chauffeurs,id',
        ]);
    
        // Créer un nouveau véhicule avec les données validées
        $vehicule = new Vehicule;
        $vehicule->date_achat = $validatedData['date_achat'];
        $vehicule->km_defaut = $validatedData['km_defaut'];
        $vehicule->matricule = $validatedData['matricule'];
        $vehicule->chauffeur_id = $validatedData['chauffeur_id'];

        
        if ($request->hasFile('photo')) {
            $vehicule->photo = 'front/images/' . $request->file('photo')->getClientOriginalName();
        }
    
        $vehicule->statut = $validatedData['statut'];
    
    
        // Sauvegarder le véhicule dans la base de données
        $vehicule->save();
    
        // Rediriger l'utilisateur vers une autre page ou recharger la page pour afficher les modifications
        return redirect()->route('admin.listeVehicule')->with('success', 'Véhicule ajouté avec succès!');
    }
    public function destroy($id)
    {
        // Trouver le véhicule à supprimer
        $vehicule = Vehicule::findOrFail($id);

        // Supprimer le véhicule
        $vehicule->delete();

        // Rediriger avec un message de succès
        return redirect()->route('admin.listeVehicule')->with('success', 'Véhicule supprimé avec succès!');
    }


    public function louer(Request $request, $id)
    {
        // Validation des données du formulaire de location
        $validatedData = $request->validate([
            'date' => 'required|date',
            'heure_debut' => 'required|date_format:H:i',
            'heure_fin' => 'required|date_format:H:i|after:heure_debut',
        ]);

        // Création d'une nouvelle location
        $location = new Location;
        $location->client_id = Auth::user()->id; // Id du client actuellement authentifié
        $location->vehicule_id = $id;
        $location->date = $validatedData['date'];
        $location->heure_debut = $validatedData['heure_debut'];
        $location->heure_fin = $validatedData['heure_fin'];

        $vehicule = Vehicule::find($id);
        $vehicule->statut = 'location';
        $vehicule->save();

        $location->save();

        // Redirection avec un message de succès
        Session::put('image_url', $vehicule->photo);
    Session::put('matricule', $vehicule->matricule);


        // Redirigez l'utilisateur vers la page de paiement
        return redirect()->route('client.paiements')->with('success', 'Véhicule loué avec succès!');    }

    public function annulerLocation(Request $request, $id)
{
    // Retrouver le véhicule
    $vehicule = Vehicule::find($id);

    // Vérifier si le véhicule est actuellement en location
    if ($vehicule->statut == 'location') {
        // Récupérer la location associée au véhicule
        $location = $vehicule->locations()->first();

        // Supprimer la location associée au véhicule
        if ($location) {
            $location->delete();
        }

        // Mettre à jour le statut du véhicule en "Disponible"
        $vehicule->statut = 'disponible';
        $vehicule->save();

        // Redirection avec un message de succès
        return redirect()->back()->with('success', 'Location annulée avec succès!');
    } else {
        // Redirection avec un message d'erreur si le véhicule n'est pas en location
        return redirect()->back()->with('error', 'Le véhicule n\'est pas actuellement en location.');
    }
}


}
