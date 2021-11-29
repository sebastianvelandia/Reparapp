<form action="{{  url('/user/'.$user->id) }}" method="post">

    @csrf
    {{ method_field('PATCH') }}
    @include('user.form',['modo'=>'Editar']);

</form>