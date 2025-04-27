@extends('layouts.plantillas')

@section('contenido')
    <div class="container">
        <h1>Crear Nuevo Equipo</h1>


        <form action="{{ route('equipos.store') }}" method="POST">
            @csrf


            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>


            <div class="form-group">
                <label for="usuario_id">Usuario_id</label>
                <input type="number" class="form-control" id="usuario_id" name="usuario_id" required>
            </div>

            <div class="form-group">
                <label for="categoria">Categoría</label>
                <input type="text" class="form-control" id="categoria" name="categoria" required>
            </div>


            <div class="form-group">
                <label for="cantidadjugadores">Cantidad de Jugadores</label>
                <input type="number" class="form-control" id="cantidadjugadores" name="cantidadjugadores" required>
            </div>

            <!-- Botones para enviar o cancelar -->
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('equipos.index') }}" class="btn btn-secondary">Cancelar</a>
        </form>
    </div>
@endsection
