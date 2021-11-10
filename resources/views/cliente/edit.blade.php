<form action="{{  url('/cliente/'.$cliente->id) }}" method="post">

@csrf
{{ method_field('PATCH') }}
@include('cliente.form',['modo'=>'Editar']);

</form>