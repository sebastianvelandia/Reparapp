@extends('layouts.app')
<div class="container">

    <table class="table">
        <thead class="table table-dark">
            <tr>
                <th>Id</th>
                <th>Estado</th>
                <th>Observaciones</th>
                <th>Producto</th>
                <th>Averia</th>
            </tr>
        </thead>
        <tbody>            
            <tr>
                <td>{{ $orden->id }}</td>
                <td>{{ $orden->estado }}</td>
                <td>{{ $orden->observaciones }}</td>
                <td>{{ $orden->producto }}</td>
                <td>{{ $orden->averia }}</td>
            </tr>
        </tbody>
    </table>
</div>
