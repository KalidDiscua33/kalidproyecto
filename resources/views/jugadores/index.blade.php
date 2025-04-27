@extends('layouts.plantillas')

@section('contenido')
    <div class="container">
        <h1>Jugadores</h1>
        <a href="{{ route('jugadores.create') }}" class="btn btn-primary">Crear Nuevo Jugador</a>
        <table class="table">
            <thead>
            <table class="table table-striped table-bordered table-hover">
                <thead class="thead-dark">
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Equipo_id</th>
                <th>Edad</th>
                <th>Posicion</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($jugadores as $jugador)
                <tr>
                    <td>{{ $jugador->id }}</td>
                    <td>{{ $jugador->nombre }}</td>
                    <td>{{ $jugador->equipo_id }}</td>
                    <td>{{ $jugador->edad }}</td>
                    <td>{{ $jugador->posicion }}</td>
                    <td>

                        <a href="{{ route('jugadores.show', $jugador->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('jugadores.edit', $jugador->id) }}" class="btn btn-warning">Editar</a>


                        <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" style="display:inline;">
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
