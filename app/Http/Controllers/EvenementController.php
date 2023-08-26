<?php

namespace App\Http\Controllers;

use App\Models\Evenement;
use Illuminate\Http\Request;
use Illuminate\Support\Str;


class EvenementController extends Controller
{


    public function traiterEven(){
        $evenement = Evenement::all();
    return view('evenement');
    }
    
    public function traitEven(Request $request)
    {
       $request->validate([

       'photos'=> 'required|file',
        'titre'=> 'required',
        'description'=> 'required',
        'lieu'=>'required',
        'date'=> 'required',
        'user_id'=>'required',
       ]);

       if ($request->hasFile('photos') && $request->file('photos')->isValid()) {
        $file = $request->file('photos');

        // Vérifier si le type de fichier est autorisé (PNG, JPEG ou JPG)
        if ($file->getClientOriginalExtension() === 'png' ||
            in_array($file->getClientOriginalExtension(), ['jpeg', 'jpg'])) {

            // Générer un nom de fichier aléatoire pour éviter les conflits
            $randomFileName = Str::random(40) . '.' . $file->getClientOriginalExtension();

            // Déplacer le fichier vers le dossier "public/images"
            $file->move(public_path('images'), $randomFileName);
            $FileName= 'images/'. $randomFileName;
            
        }
     }

            Evenement::create([
                'photos'=> $FileName,
                'titre'=> $request->titre,
                'description'=> $request->description,
                'lieu'=> $request->lieu,
                'date'=> $request->date,
                'users_id'=> $request->user_id,
                
        
        
       ]);

        return redirect()->back()->with('success', 'Evènement publié avec succès');

    }
}
