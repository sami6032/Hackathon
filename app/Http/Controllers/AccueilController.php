<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Offre;
use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function acceuil(){
        return view('accueil');
    }
    public function cvtheque(){
        return view('user.cvtheque');
    }
    public function offre(){
        $offre= Offre::all();
        $entreprise = Entreprise::all();
        return view('user.offre', compact('offre', 'entreprise'));
    }
}
