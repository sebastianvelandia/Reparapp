@extends('layouts.app')

@section('content')
<div class="container">

<a href="{{ url('/cliente/create') }}" class="btn btn-success">Registrar nuevo cliente</a>
<br>
<br>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Telfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>
                <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ url('/cliente/'.$cliente->id) }}" method="post">
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