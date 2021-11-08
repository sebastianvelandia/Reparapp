<form action="{{  url('/cliente') }}" method="POST" enctype="multipart/form-data">
@csrf

    <label for="Id">Ingrese su nombre</label>
    <input type="integer" name="Id" id="Id">
    <br>
    <label for="Nombre">Ingrese su nombre</label>
    <input type="text" name="Nombre" id="Nombre">
    <br>
    <label for="Telefono">Ingrese su telefono</label>
    <input type="text" name="Telefono" id="Telefono">
    <br>
    <input type="submit" value="Enviar">

</form>