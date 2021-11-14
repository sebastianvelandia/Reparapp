@extends('layouts.app')

@section('content')
<div class="container">
    
<a href="{{ url('/agente/create') }}" class="btn btn-success">Registrar nuevo agente</a>
<br>
<br>
<table class="table">
    <thead>
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
            <td>
                <a href="{{ url('/agente/'.$agente->id.'/edit') }}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ url('/agente/'.$agente->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input class="btn btn-danger" type="submit" onclick="return confirm('¿Esta seguro?')"value="Borrar">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection