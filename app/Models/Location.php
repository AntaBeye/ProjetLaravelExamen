<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{
    use HasFactory;
    protected $fillable = [
        'client_id', // Ajoutez le champ client_id ici
        'vehicule_id',
        'date',
        'heure_debut',
        'heure_fin',
    ];
    
}
