@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$modo}} operador</h1>

    @if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>

    </div>

    @endif
    <div class="form-group">
        <label for="Id">Ingrese su id</label>
        <input class="form-control" type="integer" name="Id" value="{{ isset($operador->id)?$operador->id:old('Id') }}" id="Id">
    </div>

    <div class="form-group">
        <label for="Nombre">Ingrese su nombre</label>
        <input class="form-control" type="text" name="Nombre" value="{{ isset($operador->nombre)?$operador->nombre:old('Nombre') }}" id="Nombre">
    </div>

    <div class="form-group">
        <label for="Telefono">Ingrese su telefono</label>
        <input class="form-control" type="text" name="Telefono" value="{{ isset($operador->telefono)?$operador->telefono:old('Telefono') }}" id="Telefono">
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-danger" href="{{ url('operador/') }}">Regresar</a>

</div>
@endsection