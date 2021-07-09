<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Logo;
use App\Nav;
use App\Slogan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $banners = Banner::all();
        $nav = Nav::first();
        $logo = Logo::first();
        $slogan = Slogan::first();
        return view('back_office.banner', compact('banners', 'nav', "slogan", 'logo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create.banner');
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
            "img_path"=>"required"
        ]);
        $img = $request->file('img_path');
        $newName= Storage::disk('public')->put('', $img);
        $banner = new Banner();
        $banner ->slide_img = $newName;
        $banner->save();
        return redirect()->route('banner.index')->with('succes', 'Une nouvelle image a bien été ajouté');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit(Banner $banner)
    {
        return view('edit.banner', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {


        if ($request->hasFile('img_path')) {
            // Supp l'ancienne photo du storage
            Storage::disk('public')->delete($banner->slide_img);
            // Remmettre la nouvelle phott dans le storage
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            // Mettre à jour la nouvelle url
            $banner->slide_img = $newName;
        } 
        $banner->save();
        return redirect()->route('banner.index')->with('succe', 'Votre image a bien été modifié.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        Storage::disk('public')->delete($banner->slide_img);
        $banner->delete();
        return redirect()->back();
    }

    public function logo(Request $request, $id){
        $logo = Logo::find($id);
        if ($request->hasFile('img_path')) {
            // Supp l'ancienne photo du storage
            Storage::disk('public')->delete($logo->url_logo);
            // Remmettre la nouvelle phott dans le storage
            $img = $request->file('img_path');  
            $newName= Storage::disk('public')->put('', $img);                                                                         
            // Mettre à jour la nouvelle url
            $logo->url_logo = $newName;
        } 
        $logo->save();
        return redirect()->back()->with('successLogo', 'Votre Logo a bien été modifiés !');

    }

    public function slogan(Request $request, $id){
        $slogan = Slogan::find($id);
        $slogan->slogan = $request->slogan;
        $slogan->save();
        return redirect()->back()->with('successSlogan', 'Votre solgan a bien été modifiés !');

    }
}
