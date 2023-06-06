<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    use HasFactory;

       public function Serveur(){
        return $this->belongsTo(Serveur::class);
    }

       public function plats(){
        return $this->belongsToMany(Plat::class)
                ->withPivot("nombre");
    }
}
