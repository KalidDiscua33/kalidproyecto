@extends('layouts.plantillas')
@section('titulo', 'detalles del equipo')
@section('contenido')
    <div class="container">
        <h1>Detalles del Equipo: {{ $equipo->nombre }}</h1>
        <p><strong>ID:</strong> {{ $equipo->id }}</p>
        <p><strong>Nombre:</strong> {{ $equipo->nombre }}</p>
        <p><strong>Cantidadjugadores:</strong> {{ $equipo->cantidad }}</p>
        <p><strong>Categoria:</strong> {{ $equipo->categoria }}</p>

        <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Volver a la lista</a>
        <a href="{{ route('equipos.edit', $equipo->id) }}" class="btn btn-warning">Editar</a>
        <form action="{{ route('equipos.destroy', $equipo->id) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">Eliminar</button>
        </form>
    </div>
@endsection
