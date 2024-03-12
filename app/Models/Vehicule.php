<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    use HasFactory;
    protected $fillable = [
        'date_achat', 'km_defaut', 'matricule', 'photo', 'statut', 'user_id'
    ];
}
