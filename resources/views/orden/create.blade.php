<form action="{{  url('/orden') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('orden.form',['modo'=>'Crear']);
</form>