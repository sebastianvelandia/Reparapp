<form action="{{  url('/taller/'.$taller->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('taller.form',['modo'=>'Editar']);

</form>