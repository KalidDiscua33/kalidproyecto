<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use App\Models\Equipo;
use Illuminate\Http\Request;

class JugadorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $jugadores = Jugador::all();
        return view('jugadores.index')->with('jugadores', $jugadores);
    }




    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {



        $equipos = Equipo::all(); // trae todos los equipos de la base de datos
        return view('jugadores.create', compact('equipos')); // PASA $equipos a la vista
    }





    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'equipo_id' => 'required|exists:equipos,id',
            'edad' => 'required|integer',
            'posicion' => 'required|integer',


        ]);
$jugador = new Jugador();

        $jugador -> nombre= $request->input('nombre');
        $jugador -> equipo_id= $request->input('equipo_id');
        $jugador -> edad= $request->input('edad');
        $jugador -> posicion= $request->input('posicion');




        $guardado = $jugador->save();

        if ($guardado) {
            return redirect()->route('jugadores.index')->with('status', 'Jugador creado exitosamente.');

        }else{
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $jugador = Jugador::with('equipo')->findOrFail($id);
        return view('jugadores.show', compact('jugador'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {


        $jugador = Jugador::findOrFail($id);
        return view('jugadores.edit')->with('jugador',  $jugador);

    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)

    {



        $jugador = Jugador::findOrFail($id);


        $jugador -> nombre= $request->input('nombre');

        $jugador -> edad= $request->input('edad');
        $jugador -> posicion= $request->input('posicion');



        $guardado = $jugador->save();

        if ($guardado) {
            return redirect()->route('jugadores.index', 'equipo')->with('status', 'Jugador actualizado exitosamente.');

        }else{
        }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $jugador = Jugador::findOrFail($id);
        $jugador->delete();

        return redirect()->route('jugadores.index')->with('success', 'jugador eliminado exitosamente.');
    }

}
