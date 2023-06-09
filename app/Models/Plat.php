<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    use HasFactory;

    public function categorie(){
        return $this->belongsTo(Categorie::class);
    }

    public function composants(){
        return $this->belongsToMany(Composant::class)
                ->withPivot("quantite")
                ->withPivot("unite");
    }
    public function commandes(){
        return $this->belongsToMany(Commande::class)
                ->withPivot("nombre");
    }

    public function getPhoto(){
        if(isset($this->photo))
            return $this->photo;
    
        return "plats/default.png";
    }
}
