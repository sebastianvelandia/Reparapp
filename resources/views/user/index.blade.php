@extends('layouts.app')

@section('content')
<div class="container">

    <div class="container">
        <h1>Lista de usuarios</h1>
    </div>
    <br>
    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
            <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td width="10px">
                    <a href="{{ url('/user/'.$user->id.'/edit') }}" class="btn btn-primary">Editar</a>
                </td>
                <td width="10px">
                    <form action="{{ url('/user/'.$user->id) }}" method="post">
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