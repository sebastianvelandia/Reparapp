@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$modo}} orden</h1>

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
        <label for="estado">Estado</label>
        <select class="form-select" type="enum" name="estado" value="{{ isset($orden->estado)?$orden->estado:old('estado') }}" id="estado">
            <option selected >{{ isset($orden->estado)?$orden->estado:old('estado') }}</option>
            <option value="Reparada">Reparada</option>
            <option value="Recepcionada">Recepcionada</option>
            <option value="En Reparacion">En Reparacion</option>
            <option value="Informada">Informada</option>
            <option value="Cerrada">Cerrada</option>
        </select>
    </div>

    <div class="form-group">
        <label for="observaciones">Ingrese observaciones</label>
        <textarea class="form-control" type="text" name="observaciones" value="{{ isset($orden->observaciones)?$orden->observaciones:old('observaciones') }}" id="observaciones"></textarea>
    </div>

    <div class="form-group">
        <label for="producto">Ingrese nombre del producto</label>
        <input class="form-control" type="text" name="producto" value="{{ isset($orden->producto)?$orden->producto:old('producto') }}" id="producto">
    </div>

    <div class="form-group">
        <label for="averia">Ingrese averia del producto</label>
        <input class="form-control" type="text" name="averia" value="{{ isset($orden->averia)?$orden->averia:old('averia') }}" id="averia">
    </div>

    <input class="btn btn-success" type="submit" value="{{ $modo }} datos">
    <a class="btn btn-danger" href="{{ url('orden/') }}">Regresar</a>

</div>
@endsection