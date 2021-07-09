<?php

namespace App\Http\Controllers;

use App\Profil;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProfilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('back_office.profil', compact('users'));
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        request()->validate([
            'email' => "required|email|min:3",
            'name' => "required",
            'prenom' => "required"
        ]);
        $user = Auth::user();
        $user->name = $request->name;
        $user->prenom = $request->prenom;
        $user->email = $request->email;
        $user->description = $request->description;

        $user->save();
        return redirect()->back()->with('success', 'Porfil modifié !');
    }
    public function img(Request $request){

        $user = Auth::user();
        // dd($request->img_path);
        if ($request->hasfile('img_path')) {
            Storage::disk( 'public' )->delete( $user->img );
            $profileImage = $request->file('img_path');
            $newName = Storage::disk( 'public' )->put( '', $profileImage );
            $user->img_profil = $newName;
            // dd('hh');
            
        }
        // dd($user);
        $user->save();
        return redirect()->back()->with('img', 'Photo de profil changé !');

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Profil  $profil
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        //

    }
    public function password()
    {
        $user = Auth::user();
        return view('edit.password', compact('user'));

    }
    public function change(Request $request)
    {
        request()->validate([
            "password" =>"required | confirmed | min:5",
            "password_confirmation" =>'required'
        ]);
        $user = Auth::user();
        $user->password =  bcrypt($request->password);
        $user->save();
        return redirect()->back()->with('success', 'Votre mot de passe a bien été modifié !');

    }
}
