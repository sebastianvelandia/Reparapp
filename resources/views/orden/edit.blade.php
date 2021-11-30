<form action="{{  url('/orden/'.$orden->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('orden.form',['modo'=>'Editar']);

</form>