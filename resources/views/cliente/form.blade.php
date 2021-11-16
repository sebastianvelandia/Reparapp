@extends('layouts.app')

@section('content')
<div class="container">

<h1>{{$modo}} cliente</h1>

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
<label for="id">Ingrese su id</label>
<input class="form-control" type="integer" name="id" value="{{ isset($cliente->id)?$cliente->id:old('id') }}" id="id">
</div>

<div class="form-group">
<label for="nombre">Ingrese su nombre</label>
<input class="form-control" type="text" name="nombre" value="{{ isset($cliente->nombre)?$cliente->nombre:old('nombre') }}" id="nombre">
</div>

<div class="form-group">
<label for="telefono">Ingrese su telefono</label>
<input class="form-control" type="text" name="telefono" value="{{ isset($cliente->telefono)?$cliente->telefono:old('telefono') }}" id="telefono">
</div>

<input class="btn btn-success" type="submit" value="{{ $modo }} datos">
<a class="btn btn-danger" href="{{ url('cliente/') }}">Regresar</a>

</div>
@endsection