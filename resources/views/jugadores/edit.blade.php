@extends('layouts.plantillas')
@section('titulo', 'editar jugador')
@section('contenido')
    <div class="container">
        <h1>Editar Jugador</h1>
        <form action="{{ route('jugadores.update', $jugador->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $jugador->nombre }}" required>
            </div>

            <div class="form-group">
                <label for="edad">Edad</label>
                <input type="text" class="form-control" id="edad" name="edad" value="{{ $jugador->edad}}" required>
            </div>

            <div class="form-group">
                <label for="posicion">Posicion</label>
                <input type="text" class="form-control" id="posicion" name="posicion" value="{{ $jugador->posicion}}" required>
            </div>


            <div class="form-group">
                <label for="equipo_id">Equipo</label>
              <input type="number" class="form-control" id="equipo_id" name="equipo_id" value="{{ $jugador->equipo_id}}" required>
            </div>
            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('jugadores.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection

