@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de ordenes</h1>
        <a href="{{ url('/orden/create') }}" class="btn btn-success">Registrar nueva orden</a>
    </div>
    <br>
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>Producto</th>
                <th>Averia</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ordens as $orden)
            <tr>
                <td>{{ $orden->id }}</td>
                <td>{{ $orden->estado }}</td>
                <td>{{ $orden->observaciones }}</td>
                <td>{{ $orden->producto }}</td>
                <td>{{ $orden->averia }}</td>
                <td width="10px">
                    <a href="{{ url('/orden/'.$orden->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/orden/'.$orden->id) }}" method="post">
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