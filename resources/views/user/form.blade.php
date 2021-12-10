@extends('layouts.app')

@section('content')
<div class="container">

    <h1>{{$modo}} usuario</h1>

    @if (count($errors)>0)

    <div class="alert alert-danger" role="alert">
        <ul>
            @foreach ($errors->all() as $error)
            <li><strong>{{ $error }}</strong></li>
            @endforeach
        </ul>

    </div>

    @endif
    <div class="card">
        <div class="card-body">
            <p class="h5">Nombre:</p>
            <p class="form-control">{{$user->name}}</p>

            <p class="h5">Lista de roles:</p>
            {!! Form::model($user, ['route'=>['user.update', $user], 'method'=>'put']) !!}
         
            {!! Form::select('rol', $array, $roleID) !!}

            {!! Form::submit('Asignar rol', ['class'=>'btn btn-success']) !!}
            <a class="btn btn-danger" href="{{ url('user/') }}">Regresar</a>
            {!! Form::close() !!}
        </div>
    </div>

</div>
@endsection