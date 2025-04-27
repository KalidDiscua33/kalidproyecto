@extends('layouts.plantillas')
@section('titulo', 'informacion del jugador')
@section('contenido')
    <div class="container">

        <p>Equipo: {{ $jugador->equipo->nombre }}</p>

        <h1>informacion del Jugador: {{ $jugador->nombre }}</h1>
        <p><strong>ID:</strong> {{ $jugador->id }}</p>
        <p><strong>Nombre:</strong> {{ $jugador->nombre }}</p>
        <p><strong>Equipo_id:</strong> {{ $jugador->equipo}}</p>
        <p><strong>Edad:</strong> {{ $jugador->edad}}</p>
        <p><strong>Posicion:</strong> {{ $jugador->posicion }}</p>

        <a href="{{ route('jugadores.index') }}" class="btn btn-secondary">Volver a la lista</a>
        <a href="{{ route('jugadores.edit', $jugador->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('jugadores.destroy', $jugador->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
