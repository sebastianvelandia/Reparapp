<form action="{{  url('/taller') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('taller.form',['modo'=>'Crear']);
</form>