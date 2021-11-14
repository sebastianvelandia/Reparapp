<a href="{{ url('/cliente/create') }}">Registrar nuevo cliente</a>
<table class="table">
    <thead>
        <tr>
            <th>Id</th>
            <th>Nombre</th>
            <th>Telfono</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($clientes as $cliente)
        <tr>
            <td>{{ $cliente->id }}</td>
            <td>{{ $cliente->nombre }}</td>
            <td>{{ $cliente->telefono }}</td>
            <td>
                <a href="{{ url('/cliente/'.$cliente->id.'/edit') }}">Editar</a>
            </td>
            <td>
                <form action="{{ url('/cliente/'.$cliente->id) }}" method="post">
                @csrf
                {{ method_field('DELETE')}}
                <input type="submit" onclick="return confirm('¿Esta seguro?')"value="Borrar">

                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
