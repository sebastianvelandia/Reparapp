@extends('layouts.app')

@section('content')
<div class="container">
    <form class="form-group" method="GET" action="{{ route('orden.show') }}" role="search">
        <label for="orden">Ingrese el id de la orden</label>
        <input class="form-control" type="text" name="id" id="id">
        <div class="form-group">
            <button class="btn btn-primary" type="submit">Buscar</button>
        </div>
    </form>  
</div>
@endsection