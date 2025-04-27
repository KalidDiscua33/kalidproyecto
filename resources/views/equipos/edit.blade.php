@extends('layouts.plantillas')
@section('titulo', 'editar equipo')
@section('contenido')
    <div class="container">
        <h1>Editar Equipo</h1>
        <form action="{{ route('equipos.update', $equipo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $equipo->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidadjugadores</label>
                <input type="number" class="form-control" id="cantidadjugadores" name="cantidadjugadores" value="{{ $equipo->cantidad }}" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoria</label>
                <input type="text" class="form-control" id="categoria" name="categoria" value="{{ $equipo->categoria }}" required>
            </div>

            <div class="form-group">
                <label for="usuario">usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="{{ $equipo->usuario}}" required>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar</button>
            <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
