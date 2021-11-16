@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de Call Centers</h1>
        <a href="{{ url('/callcenter/create') }}" class="btn btn-success">Registrar nuevo agente</a>
    </div>
    <br>
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($callcenters as $callcenter)
            <tr>
                <td>{{ $callcenter->id }}</td>
                <td>{{ $callcenter->nombre }}</td>
                <td>{{ $callcenter->direccion }}</td>
                <td width="10px">
                    <a href="{{ url('/callcenter/'.$callcenter->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/callcenter/'.$callcenter->id) }}" method="post">
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