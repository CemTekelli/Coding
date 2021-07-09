<?php

namespace App\Http\Controllers;

use App\Presentation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class PresentationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $presentation = Presentation::first();
        return view('back_office.about', compact('presentation'));
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
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function show(Presentation $presentation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function edit(Presentation $presentation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            "description1"=>'required',
            "description2"=>'required',
            "lien"=>'required',
            "button"=>'required',
        ]);
        $presentation= Presentation::find($id);

        $presentation->description1 = $request->description1;
        $presentation->description2 = $request->description2;
        $presentation->lien = $request->lien;
        $presentation->button = $request->button;        

        if ($request->hasFile('img_path')) {
            Storage::disk('public')->delete($presentation->img_video);
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            $presentation->img_video = $newName;
        } 
        $presentation->save();
        return redirect()->route('about.index')->with('success', 'Vos données ont bien été modifié.');;

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Presentation  $presentation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Presentation $presentation)
    {
        //
    }
}
