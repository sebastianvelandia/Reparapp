<?php

namespace App\Http\Controllers;

use App\Models\Tecnico;
use Illuminate\Http\Request;

class TecnicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['tecnicos'] = Tecnico::simplePaginate();
        return view('tecnico.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tecnico.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $campos = [
            'Id'=>'required|integer|max:12',
            'Nombre'=>'required|string|max:100'
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);

        $datosTecnico = request()->except('_token');
        Tecnico::insert($datosTecnico);
        return redirect('tecnico');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function show(Tecnico $tecnico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tecnico = Tecnico::findOrFail($id);
        return view('tecnico.edit', compact('tecnico'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'Id'=>'required|integer|max:12',
            'Nombre'=>'required|string|max:100'
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);
        
        $datosTecnico = request()->except('_token','_method');
        Tecnico::where('id','=',$id)->update($datosTecnico);
        return redirect('tecnico');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tecnico  $tecnico
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Tecnico::destroy($id);
        return redirect('tecnico');
    }
}
