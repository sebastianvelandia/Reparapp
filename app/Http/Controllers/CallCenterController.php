<?php

namespace App\Http\Controllers;

use App\Models\CallCenter;
use Illuminate\Http\Request;

class CallCenterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['callcenters']=CallCenter::simplePaginate();
        return view('callcenter.index',$datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('callcenter.create');
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
            'nombre'=>'required|string|max:100',
            'direccion'=>'required|string|max:100'
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);

        $datosCallCenter = request()->except('_token');
        CallCenter::insert($datosCallCenter);
        return redirect('callcenter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CallCenter  $callCenter
     * @return \Illuminate\Http\Response
     */
    public function show(CallCenter $callCenter)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CallCenter  $callCenter
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $callcenter = CallCenter::findOrFail($id);
        return view('callcenter.edit', compact('callcenter'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CallCenter  $callCenter
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $campos = [
            'nombre'=>'required|string|max:100',
            'direccion'=>'required|string|max:100'
        ];

        $mensaje=[
            'required'=>'El :attribute es requerido',
        ];

        $this->validate($request,$campos,$mensaje);
        
        $datosCallCenter = request()->except('_token','_method');
        CallCenter::where('id','=',$id)->update($datosCallCenter);
        return redirect('callcenter');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CallCenter  $callCenter
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        CallCenter::destroy($id);
        return redirect('callcenter');
    }
}
