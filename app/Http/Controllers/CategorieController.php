<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index(){
        $categories=Categorie::all();
        return view("visiteur.menu", compact("categories"));
    }
    public function plats(Categorie $categorie){
        $plats=$categorie->plats;
    
        return view("visiteur.plats", compact("plats", "categorie"));
    }
}
