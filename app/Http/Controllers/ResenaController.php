<?php

namespace App\Http\Controllers;

use App\Resena;
use App\Servicio;
use App\Organizacion;
use Illuminate\Http\Request;

class ResenaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $this->validate(request(),[
            'nivel' => 'required',
            'servicio' => 'required',
            'descripcion' => 'required',
        ]);

        $resena = new Resena;
        $resena->nivel = $request->nivel;
        $resena->descripcion = $request->descripcion;
        $resena->idServicio = $request->servicio;
        $resena->titulo = 'Titulo';

        $resena->save();

        $servicio = Servicio::find($resena->idServicio);
        $servicio->nivel = $servicio->promedioResenas();
        $servicio->save();

        $organizacion = $servicio->organizacion()->get()->first();
        $organizacion->nivel = $organizacion->promedioResenas();
        $organizacion->save();

        return redirect()->action('ServicioController@show',['id'=>$resena->idServicio]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function show(Resena $resena)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function edit(Resena $resena)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Resena $resena)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Resena  $resena
     * @return \Illuminate\Http\Response
     */
    public function destroy(Resena $resena)
    {
        //
    }
}
