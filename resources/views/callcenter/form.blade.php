@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$modo}} Call Center</h1>

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
        <label for="Nombre">Ingrese el nombre del Call Center</label>
        <input class="form-control" type="text" name="Nombre" value="{{ isset($callcenter->nombre)?$callcenter->nombre:old('Nombre') }}" id="Nombre">
    </div>

    <div class="form-group">
        <label for="Direccion">Ingrese la direccion del Call Center</label>
        <input class="form-control" type="text" name="Direccion" value="{{ isset($callcenter->direccion)?$callcenter->direccion:old('Direccion') }}" id="Direccion">
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-danger" href="{{ url('callcenter/') }}">Regresar</a>

</div>
@endsection