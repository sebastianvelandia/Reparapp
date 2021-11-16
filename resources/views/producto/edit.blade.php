<form action="{{  url('/producto/'.$producto->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('producto.form',['modo'=>'Editar']);

</form>