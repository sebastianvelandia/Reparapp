@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de agentes</h1>
        <a href="{{ url('/agente/create') }}" class="btn btn-success">Registrar nuevo agente</a>
    </div>
    <br>
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($agentes as $agente)
            <tr>
                <td>{{ $agente->id }}</td>
                <td>{{ $agente->nombre }}</td>
                <td width="10px">
                    <a href="{{ url('/agente/'.$agente->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/agente/'.$agente->id) }}" method="post">
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