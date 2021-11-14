<h1>{{$modo}} agente</h1>

<label for="Id">Ingrese su id</label>
<input type="integer" name="Id" value="{{ isset($agente->id)?$agente->id:'' }}" id="Id">
<br>
<label for="Nombre">Ingrese su nombre</label>
<input type="text" name="Nombre" value="{{ isset($agente->nombre)?$agente->nombre:'' }}" id="Nombre">
<br>
<input type="submit" value="{{ $modo }} datos">
<a href="{{ url('agente/') }}">Regresar</a>