<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\produit;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogpostController extends Controller
{
    public function ajoutproduit()
    {
        $categories = category::all();
        return view('ajouter',compact('categories'));
    }
    public function blog()
    {
        return view('blog');
    }
    
    public function edit($id)
    {
        $categories = category::all();
        $blog = blog::find($id);
        return view('produit.editProduit', compact('produit','categories'));
    }
    public function update(Request $request , $id)
    {
         $request->validate([
            'titre' => 'required',
            'photo' =>'required',
            'contenu' => 'required',
            
            
            
            // autres règles de validation pour les champs
        ]);
       
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

        blog::find($id)->update([
            'titre'=>$request->titre,
            'contenu'=>$request->contenu,
            'photo'=>$name,
            'category_id'=>$request->category_id
        ]);

        return redirect('blog');
    }


    public function produit()
    {
        $produits = blog::all();
        return view('produit',compact('produits'));
    }
    public function welcome()
    {
        
        $produits = blog::paginate(5);
        return view('welcome',compact('produits'));
    }

    public function storeproduit(Request $request)
    {
  
        $request->validate([
            'titre' => 'required|string',
            'contenu' => 'required|string',
            'photo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'category' => 'required|string',
        ]);
        if ($request->file('photo')) {
            $photo = $request->file('photo')->store('public/picture');
            $name = explode('/', $photo)[2];
            $input['photo'] = $name;
        };

        blog::create([
            'titre'=> $request->titre,
            'contenu'=>$request->contenu,
            'photo'=>$name,
            'category_id'=> $request->category,
           // 'user_id'=> Auth::user()->id,
        ]);
        return redirect('blog');
    }
  

    public function destroy( $id)
    {
        blog::find($id)->delete();

        return redirect()->route('blog')->with('success', 'Utilisateur supprimé avec succès');
    }



    
}
