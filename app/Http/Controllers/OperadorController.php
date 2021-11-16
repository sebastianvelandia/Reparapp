<?php

namespace App\Http\Controllers;

use App\Models\Operador;
use Illuminate\Http\Request;

class OperadorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['operadors'] = Operador::simplePaginate();
        return view('operador.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('operador.create');
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
            'id' => 'required|integer|max:12',
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|string|max:12'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosOperador = request()->except('_token');
        Operador::insert($datosOperador);
        return redirect('operador');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function show(Operador $operador)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $operador = Operador::findOrFail($id);
        return view('operador.edit', compact('operador'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'id' => 'required|integer|max:12',
            'nombre' => 'required|string|max:100',
            'telefono' => 'required|string|max:12'
        ];

        $mensaje = [
            'required' => 'El :attribute es requerido',
        ];

        $this->validate($request, $campos, $mensaje);

        $datosOperador = request()->except('_token', '_method');
        Operador::where('id', '=', $id)->update($datosOperador);
        return redirect('operador');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Operador  $operador
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Operador::destroy($id);
        return redirect('operador');
    }
}
