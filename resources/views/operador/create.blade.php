<form action="{{  url('/operador') }}" method="POST" enctype="multipart/form-data">

    @csrf
    @include('operador.form',['modo'=>'Crear']);
    
</form>