@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$modo}} producto</h1>

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
        <label for="nombre">Ingrese nombre del producto</label>
        <input class="form-control" type="text" name="nombre" value="{{ isset($producto->nombre)?$producto->nombre:old('nombre') }}" id="nombre">
    </div>

    <div class="form-group">
        <label for="averia">Ingrese averia del producto</label>
        <input class="form-control" type="text" name="averia" value="{{ isset($producto->averia)?$producto->averia:old('averia') }}" id="averia">
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-danger" href="{{ url('producto/') }}">Regresar</a>

</div>
@endsection