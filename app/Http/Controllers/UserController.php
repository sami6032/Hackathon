<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::all();
        return view('user.index', compact('user'))->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = User::all();
        return view('user.create', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $user = new User();
        $user->nom = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->statut = 0;

        $user->save();
             return redirect()->route('user.index')->with('success', 'profil créer avec succes.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $request->validate([
            'description'=> 'required',
            'cv'=> 'required',
            'photo'=> 'required',
            'video'=>'required',
        ]);
        $input = $request->all();
        if ($image = $request->file('photo')) {
            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['photo'] = "$profileImage";
        } else {
            unset($input['image']);
        }
        if($user->image){
            Storage::disk('public')->delete($user->image);
        }
        if ($movie = $request->file('video')) {
            $destinationPath = 'movie/';
            $profileImage = date('YmdHis') . "." . $movie->getClientOriginalExtension();
            $movie->move($destinationPath, $profileImage);
            $input['video'] = "$profileImage";
        } else {
            unset($input['video']);
        }
        if ($pdf = $request->file('cv')) {
            $destinationPath = 'docs/';
            $profileImage = date('YmdHis') . "." . $pdf->getClientOriginalExtension();
            $pdf->move($destinationPath, $profileImage);
            $input['cv'] = "$profileImage";
        } else {
            unset($input['cv']);
        }
        $user->update($input);
        return redirect()->route('user.index')
            ->with('success', 'Modifier avecc succès');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
