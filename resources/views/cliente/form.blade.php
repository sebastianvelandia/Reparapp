<h1>{{$modo}} empleado</h1>

<label for="Id">Ingrese su nombre</label>
<input type="integer" name="Id" value="{{ isset($cliente->id)?$cliente->id:'' }}" id="Id">
<br>
<label for="Nombre">Ingrese su nombre</label>
<input type="text" name="Nombre" value="{{ isset($cliente->nombre)?$cliente->nombre:'' }}" id="Nombre">
<br>
<label for="Telefono">Ingrese su telefono</label>
<input type="text" name="Telefono" value="{{ isset($cliente->telefono)?$cliente->telefono:'' }}" id="Telefono">
<br>
<input type="submit" value="{{ $modo }} datos">
<a href="{{ url('cliente/') }}">Regresar</a>