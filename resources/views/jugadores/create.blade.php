@extends('layouts.plantillas')

@section('contenido')
    <div class="container">
        <h1>Crear Jugador nuevo</h1>

        <form action="{{ route('jugadores.store') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="equipo_id">Equipo</label>
                <select class="form-control" id="equipo_id" name="equipo_id" required>
                    @foreach($equipos as $equipo)
                        <option value="{{ $equipo->id }}">{{ $equipo->nombre }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>

            <div class="form-group">
                <label for="posicion">Posición</label>
                <input type="text" class="form-control" id="posicion" name="posicion" required>
            </div>

            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('jugadores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
