@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('info'))

    <div class="aler alert-danger">
        <strong>{{session('info')}}</strong>
    </div>
    @endif

    <form class="form-group" action="{{  url('/orden/'.'id') }}" method="get" role="search">
        
        <div class="form-group">

        <label for="id">Ingrese el id de la orden</label>
        <input class="form-control" type="number" name="id" id="id">

        <br>
        <input class="btn btn-success" type="submit" value="Buscar">
        </div>
    </form>  
</div>
@endsection