<form action="{{  url('/tecnico/'.$tecnico->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('tecnico.form',['modo'=>'Editar']);

</form>