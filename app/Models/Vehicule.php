<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Chauffeur;
use App\Models\Location;

class Vehicule extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function locations()
    {
        return $this->hasMany(Location::class);
    }
    protected $fillable = [
        'date_achat', 
        'km_defaut', 
        'matricule', 
        'photo', 
        'statut',
        'chauffeur_id',
    ];
    public function chauffeur()
{
    return $this->belongsTo(Chauffeur::class, 'chauffeur_id');
}

}
