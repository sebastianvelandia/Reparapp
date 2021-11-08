Mostrar lista de clientes
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
            <td>Editar</td>
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
