<?php

namespace App\Http\Controllers;
use App\Models\Jugador;
use App\Models\Equipo;
use App\Models\User;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    public function __construct()
    {

    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $equipos = Equipo::all();
        return view('equipos.index')->with('equipos', $equipos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'categoria' => 'required|string|max:255',
            'cantidadjugadores' => 'required|integer|max:255',

        ]);

        $equipo = new Equipo();


        $equipo->user_id =  auth()->user()->id;
        $equipo -> nombre= $request->input('nombre');
        $equipo -> categoria= $request->input('categoria');
        $equipo -> cantidadjugadores= $request->input('cantidadjugadores');

            $guardado = $equipo->save();

            if ($guardado) {
                return redirect()->route('equipos.index')->with('status', 'equipo creado exitosamente.');

            }else{
            }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $equipo = Equipo::with('jugadores')->findOrFail($id);
        return view('equipos.show')->with('equipo', $equipo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $equipo = Equipo::findOrFail($id);
        return view('equipos.edit')->with('equipo', $equipo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $equipo = Equipo::findOrFail($id);

        $equipo->user_id = auth()->id();

        $equipo -> nombre= $request->input('nombre');
        $equipo -> categoria= $request->input('categoria');
        $equipo -> cantidadjugadores= $request->input('cantidadjugadores');


        $guardado = $equipo->save();

        if ($guardado) {
            return redirect()->route('equipos.index')->with('status', 'equipo creado exitosamente.');

        }else{
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipos = Equipo::findOrFail($id);
        $equipos->delete();

        return redirect()->route('equipos.index')->with('success', 'Equipo eliminado exitosamente.');
    }

    private function middleware(string $string)
    {
    }
}
