<?php

namespace App\Http\Controllers;

use App\Icon;
use App\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::all();
        return view('back_office.service', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $icons= Icon::all();
        return view('create.service', compact('icons'));
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
            "titre"=>"required",
            "description"=>"required",
            "icon_id"=>"required",
        ]);
        $service= new Service();
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon_id = $request->icon_id;
        $service->save();
        return redirect()->route('seervice.index')->with('success', 'Votre Service a bien été créer.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function show(Service $service)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service= Service::find($id);
        $icons= Icon::all();
        return view('edit.service', compact('service', 'icons'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->titre = $request->titre;
        $service->description = $request->description;
        $service->icon_id = $request->icon_id;
        $service->save();
        return redirect()->route('seervice.index')->with('success', 'Votre Service a bien été modifier.');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Service  $service
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return redirect()->back();
    }
}
