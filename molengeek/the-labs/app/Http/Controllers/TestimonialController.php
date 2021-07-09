<?php

namespace App\Http\Controllers;

use App\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testimonials = Testimonial::all();
        return view('back_office.testimonial', compact('testimonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.testimonial');
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
            "prenom"=>"required",
            "nom"=>"required",
            "post"=>"required",
            "commentaire"=>"required",
            "img_path"=>"required",
        ]);
        $testimonial = new Testimonial();
        $testimonial->prenom = $request->prenom;
        $testimonial->nom = $request->nom;
        $testimonial->post = $request->post;
        $testimonial->commentaire = $request->commentaire;

        $img = $request->file('img_path');
        $newName= Storage::disk('public')->put('', $img);
        $testimonial->img_url= $newName;
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('sucess', "Un Testimonial a bien été rajouté !");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function show(Testimonial $testimonial)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function edit(Testimonial $testimonial)
    {
        return view('edit.testimonial', compact('testimonial'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Testimonial $testimonial)
    {
        
        $testimonial->prenom = $request->prenom;
        $testimonial->nom = $request->nom;
        $testimonial->post = $request->post;
        $testimonial->commentaire = $request->commentaire;
        if ($request->hasFile('img_path')) {
            Storage::disk('public')->delete($testimonial->img_url);
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            $testimonial->img_url = $newName;
        } 
        $testimonial->save();
        return redirect()->route('testimonial.index')->with('sucess', "Un Testimonial a bien été rajouté !");

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Testimonial  $testimonial
     * @return \Illuminate\Http\Response
     */
    public function destroy(Testimonial $testimonial)
    {
        Storage::disk('public')->delete($testimonial->img_url);
        $testimonial->delete();
        return redirect()->back();
    }
}
