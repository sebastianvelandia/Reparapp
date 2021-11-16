<form action="{{  url('/tecnico') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('tecnico.form',['modo'=>'Crear']);
</form>