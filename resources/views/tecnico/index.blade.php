@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de tecnicos</h1>
        <a href="{{ url('/tecnico/create') }}" class="btn btn-success">Registrar nuevo tecnico</a>
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
            @foreach ($tecnicos as $tecnico)
            <tr>
                <td>{{ $tecnico->id }}</td>
                <td>{{ $tecnico->nombre }}</td>
                <td width="10px">
                    <a href="{{ url('/tecnico/'.$tecnico->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/tecnico/'.$tecnico->id) }}" method="post">
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