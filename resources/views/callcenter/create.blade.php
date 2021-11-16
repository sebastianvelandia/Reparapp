<form action="{{  url('/callcenter') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @include('callcenter.form',['modo'=>'Crear']);
</form>