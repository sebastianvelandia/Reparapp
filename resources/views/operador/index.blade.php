@extends('layouts.app')

@section('content')
<div class="container">
    <div class="container">
        <h1>Lista de operadores</h1>
        <a href="{{ url('/operador/create') }}" class="btn btn-success">Registrar nuevo operador</a>
    </div>
    <br>
    <table class="table">
        <thead class="table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Telefono</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($operadors as $operador)
            <tr>
                <td>{{ $operador->id }}</td>
                <td>{{ $operador->nombre }}</td>
                <td>{{ $operador->telefono }}</td>
                <td width="10px">
                    <a href="{{ url('/operador/'.$operador->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/operador/'.$operador->id) }}" method="post">
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