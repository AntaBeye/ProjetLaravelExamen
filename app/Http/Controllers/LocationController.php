<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class LocationController extends Controller
{
    public function louer(Request $request)
{
    // Valider les données du formulaire
    $request->validate([
        'client_id' => 'required',
        'vehicule_id' => 'required',
        'date' => 'required|date',
        'heure_debut' => 'required',
        'heure_fin' => 'required',
    ]);

    // Créer une nouvelle entrée dans la table locations
    Location::create([
        'client_id' => $request->client_id,
        'vehicule_id' => $request->vehicule_id,
        'date' => $request->date,
        'heure_debut' => $request->heure_debut,
        'heure_fin' => $request->heure_fin,
    ]);

    // Rediriger l'utilisateur avec un message de succès
    return redirect()->back()->with('success', 'La location a été enregistrée avec succès.');
}
}
