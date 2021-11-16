@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de productos</h1>
        <a href="{{ url('/producto/create') }}" class="btn btn-success">Registrar nuevo agente</a>
    </div>
    <br>
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Averia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($productos as $producto)
            <tr>
                <td>{{ $producto->id }}</td>
                <td>{{ $producto->nombre }}</td>
                <td>{{ $producto->averia }}</td>
                <td width="10px">
                    <a href="{{ url('/producto/'.$producto->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/producto/'.$producto->id) }}" method="post">
                        @csrf
                        {{ method_field('DELETE')}}
                        <input class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro?')" value="Borrar">

                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection