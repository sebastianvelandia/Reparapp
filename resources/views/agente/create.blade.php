<form action="{{  url('/agente') }}" method="POST" enctype="multipart/form-data">
@csrf
@include('agente.form',['modo'=>'Crear']);
</form>