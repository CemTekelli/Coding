<?php

namespace App\Http\Controllers;

use App\Footer;
use Illuminate\Http\Request;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $footer = Footer::first();
        return view('back_office.footer', compact('footer'));
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
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function show(Footer $footer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function edit(Footer $footer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Footer $footer)
    {
        request()->validate([
            "footer"=>"required",
        ]);
        $footer->text = $request->footer;
        $footer->save();
        return redirect()->back()->with('success', 'Votre navbar à bien été modifié !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Footer  $footer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footer $footer)
    {
        //
    }
}
