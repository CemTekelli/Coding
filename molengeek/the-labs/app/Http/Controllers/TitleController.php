<?php

namespace App\Http\Controllers;

use App\Title;
use Illuminate\Http\Request;

class TitleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $titre = Title::first();
        return view('back_office.titre', compact('titre'));
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
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function show(Title $title)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function edit(Title $title)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        request()->validate([
            "about_titre"=>"required",
            // "about_mot"=>"required",
            "testimonial_titre"=>"required",
            // "testimonial_mot"=>"required",
            "service_titre"=>"required",
            // "service_mot"=>"required",
            "team_titre"=>"required",
            // "team_mot"=>"required",
            "contact_titre"=>"required",
            // "contact_mot"=>"required",
            "servicePrime_titre"=>"required",
            // "servicePrime_mot"=>"required",
        ]);
        $title = Title::find($id);
        $title->about_titre = $request->about_titre;
        // $title->about_mot = $request->about_mot;

        $title->testimonial_titre = $request->testimonial_titre;
        // $title->testimonial_mot = $request->testimonial_mot;
        
        $title->service_titre = $request->service_titre;
        // $title->service_mot = $request->service_mot;
        
        $title->team_titre = $request->team_titre;
        // $title->team_mot = $request->team_mot;
        
        $title->contact_titre = $request->contact_titre;
        // $title->contact_mot = $request->contact_mot;

        $title->servicePrime_titre = $request->servicePrime_titre;
        // $title->servicePrime_mot = $request->servicePrime_mot;

        $title->save();
        return redirect()->back()->with('success','Changement avec succès !');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Title  $title
     * @return \Illuminate\Http\Response
     */
    public function destroy(Title $title)
    {
        //
    }
}
