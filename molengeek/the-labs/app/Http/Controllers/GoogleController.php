<?php

namespace App\Http\Controllers;

use App\Google;
use Illuminate\Http\Request;

class GoogleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $google = Google::first();
        return view('back_office.google', compact('google'));
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
     * @param  \App\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function show(Google $google)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function edit(Google $google)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Google $google)
    {
        request()->validate([
            "rue"=>"required",
            "ville"=>"required",
            "pays"=>"required",
        ]);
        $google->rue = $request->rue;
        $google->ville = $request->ville;
        $google->pays = $request->pays;
        $google->save();
        return redirect()->back()->with('success', 'Google Maps modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Google  $google
     * @return \Illuminate\Http\Response
     */
    public function destroy(Google $google)
    {
        //
    }
}
