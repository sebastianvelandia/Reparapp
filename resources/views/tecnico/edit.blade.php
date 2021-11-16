<form action="{{  url('/tecnico/'.$agente->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('tecnico.form',['modo'=>'Editar']);

</form>