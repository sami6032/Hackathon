<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use Illuminate\Http\Request;

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Entreprise;

class EntrepriseController extends Controller
{
    public function afficher()
    {
        $entreprise = Entreprise::all(); // Vous pouvez ajuster l'ID en fonction de votre logique
        return view('entreprise.offres', compact('entreprise'));
    }

    public function info(){
        $entreprise = Entreprise::all();
        return view('users.description',  compact('entreprise'));
    }
     

    public function index()
    {
        $entreprises = Entreprise::all();
        return view('users.description', compact('entreprises'));
    }

    public function show()
    {
        $entreprises = Entreprise::all();
        return view('users.index2', compact('entreprises'));
    }

    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        Entreprise::create($request->all());
        return redirect()->route('users.index');
    }

    public function edit()
    {
        $entreprise = Entreprise::find(1);
        return view('users.edit', compact('entreprise'));
    }

    public function update(Request $request,)
   {
       // Logique pour mettre à jour les données du produit
       $entreprise = Entreprise::findOrFail();
       dd($entreprise);
       $request->valider([
            'name' => ['required'],
            'domaine' => ['required'],
            'anne' => ['required'],
            'mission' => ['required'],
            'vision' => ['required'],
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'description' => ['required'],
            
    ]);

    $entreprise->update([
        'name' => $request->input('name'),
        'domaine' => $request->input('domaine'),
        'anne' => $request->input('anne'),
        'mission' => $request->input('mission'),
        'vision' => $request->input('vision'),
        'photo' =>$request->input('photo'),
        'description' => $request->input('description'),
        // Autres champs à mettre à jour...
    ]);
      $entreprise->update($request->all());
          return redirect()->route('users.index2')->with('success', 'Produit modifié avec succès');
    
}
// public function destroy()
//     {
//         Entreprise::destroy();
//         return redirect()->route('users.index');
//     }
}