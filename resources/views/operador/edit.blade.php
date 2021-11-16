<form action="{{  url('/operador/'.$operador->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('operador.form',['modo'=>'Editar']);

</form>