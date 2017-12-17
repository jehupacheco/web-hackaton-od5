<?php

namespace App\Http\Controllers;

use App\Servicio;
use DB;
use Illuminate\Http\Request;

class ServicioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $todosLosServicios = Servicio::all();
        foreach($todosLosServicios as $servicio){
            $servicio->nivel = $servicio->promedioResena();
            $servicio->save();
        }

        $busqueda = $request->query('busqueda');

        if (is_null($busqueda)){
            $tipo = $request->query('tipo');
            if (is_null($tipo)){
                $servicios = Servicio::orderBy('nivel')->simplePaginate(5);
            } else{
                if ($tipo == 'psico') $tipoId=1;
                else if ($tipo == 'legal') $tipoId=2;

                $servicios = DB::table('servicios')->join('servicio_tipo','servicios.id','=','servicio_tipo.idServicio')
                                                    ->where('servicio_tipo.idTipo','=',$tipoId)->get();
            }
        } else{
                $servicios = Servicio::where('titulo','like', '%' . $busqueda . '%')->simplePaginate(5);
        }

        return view('servicio.index', compact('servicios'));
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
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function show(Servicio $servicio)
    {
        return view('servicio.show',compact('servicio'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function edit(Servicio $servicio)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicio $servicio)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Servicio  $servicio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Servicio $servicio)
    {
        //
    }
}
