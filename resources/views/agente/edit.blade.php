<form action="{{  url('/agente/'.$agente->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('agente.form',['modo'=>'Editar']);

</form>