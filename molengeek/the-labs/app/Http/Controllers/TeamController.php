<?php

namespace App\Http\Controllers;

use App\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams= Team::all();
        return view('back_office.team', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.team');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            "prenom"=>'required',
            "nom"=>'required',
            "post"=>'required|unique',
            "img_path"=>'required',
        ]);
        $team = new Team();
        $team->prenom = $request->prenom;
        $team->nom = $request->nom;
        $team->post = $request->post;
        $img = $request->file('img_path');
        $newName= Storage::disk('public')->put('', $img);
        $team->img_url= $newName;
        $team->save();
        return redirect()->route('team.index')->with('success', 'Un membre a bien été mis à jour !');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('edit.team', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Team $team)
    {
        request()->validate([
            'post'=>'required',
        ]);
        $team->prenom = $request->prenom;
        $team->nom = $request->nom;
        $team->post = $request->post;
        if ($request->hasFile('img_path')) {
            Storage::disk('public')->delete($team->img_url);
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            $team->img_url = $newName;
        } 
        $team->save();
        return redirect()->route('team.index')->with('success', 'Vos modifications on bien été mis à jour !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        Storage::disk('public')->delete($team->img_url);
        $team->delete();
        return redirect()->back();
    }
}
