<form action="{{  url('/producto') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('producto.form',['modo'=>'Crear']);
</form>