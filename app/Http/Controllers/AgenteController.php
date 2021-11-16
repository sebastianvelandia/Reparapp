<?php

namespace App\Http\Controllers;

use App\Models\Agente;
use Illuminate\Http\Request;

class AgenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['agentes']=Agente::simplePaginate();
        return view('agente.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('agente.create');
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
            'id'=>'required|integer|max:12',
            'nombre'=>'required|string|max:100'
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);

        $datosAgente = request()->except('_token');
        Agente::insert($datosAgente);
        return redirect('agente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function show(Agente $agente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $agente = Agente::findOrFail($id);
        return view('agente.edit', compact('agente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'id'=>'required|integer|max:12',
            'nombre'=>'required|string|max:100'
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);
        
        $datosAgente = request()->except('_token','_method');
        Agente::where('id','=',$id)->update($datosAgente);
        return redirect('agente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agente  $agente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Agente::destroy($id);
        return redirect('agente');
    }
}
