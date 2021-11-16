@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$modo}} tecnico</h1>

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
        <input class="form-control" type="integer" name="id" value="{{ isset($tecnico->id)?$tecnico->id:old('id') }}" id="id">
    </div>

    <div class="form-group">
        <label for="nombre">Ingrese su nombre</label>
        <input class="form-control" type="text" name="nombre" value="{{ isset($tecnico->nombre)?$tecnico->nombre:old('nombre') }}" id="nombre">
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-danger" href="{{ url('tecnico/') }}">Regresar</a>

</div>
@endsection