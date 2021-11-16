@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de talleres</h1>
        <a href="{{ url('/taller/create') }}" class="btn btn-success">Registrar nuevo taller</a>
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
            @foreach ($tallers as $taller)
            <tr>
                <td>{{ $taller->id }}</td>
                <td>{{ $taller->nombre }}</td>
                <td width="10px">
                    <a href="{{ url('/taller/'.$taller->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/taller/'.$taller->id) }}" method="post">
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