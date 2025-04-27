@extends('layouts.plantillas')

@section('contenido')
    <div class="container">
        <h1>Equipos</h1>
        <a href="{{ route('equipos.create') }}" class="btn btn-outline-success">Crear Nuevo Equipo</a>
        <table class="table">
            <thead>
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Usuario_id</th>
                <th>Categoria</th>
                <th>Cantidad Jugadores</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($equipos as $equipo)
                <tr>
                    <td>{{ $equipo->id }}</td>
                    <td>{{ $equipo->nombre }}
                        <a href="{{ route('jugadores.index',$equipo->nombre) }}" class="btn btn-info"></a>
                    </td>
                    <td>{{ $equipo->user_id }}</td>
                    <td>{{ $equipo->categoria }}</td>
                    <td>{{ $equipo->cantidadjugadores }}</td>
                    <td>

                        <a href="{{ route('equipos.show', $equipo->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning">Editar</a>


                        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
