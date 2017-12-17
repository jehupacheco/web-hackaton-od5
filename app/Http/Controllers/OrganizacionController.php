<?php

namespace App\Http\Controllers;

use App\Organizacion;
use Illuminate\Http\Request;

class OrganizacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $todasLasOrganizaciones = Organizacion::all();
        foreach($todasLasOrganizaciones as $organizacion){
            $organizacion['nivel'] = $organizacion->promedioResena();
            $organizacion->save();
        }
        $organizaciones = Organizacion::simplePaginate(5);

        return view('organizacion.index', compact('organizaciones'));
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
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function show(Organizacion $organizacion)
    {
        return view('organizacion.show',compact('organizacion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function edit(Organizacion $organizacion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Organizacion $organizacion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Organizacion  $organizacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Organizacion $organizacion)
    {
        //
    }
}
