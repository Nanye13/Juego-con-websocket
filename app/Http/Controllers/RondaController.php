<?php

namespace App\Http\Controllers;

use App\Events\Notificar;
use App\Models\Equipo;
use App\Models\Juego;
use App\Models\Ronda;
use Carbon\Carbon;
use Illuminate\Http\Request;

class RondaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function clave()
    {
        return view('jugadores.ingresar');
    }
    public function ingresar(Request $request)
    {
        $clave = $request->input('clave');
        $equipo = Equipo::where('clave', $clave)->first();

        $nombre_equipo = $equipo->nombre;
        $equipo_id = $equipo->id;

        return view('jugadores.espera', compact('nombre_equipo', 'equipo_id'));
    }

    public function participacion(Request $request)
    {
        $equipo_id = $request->input('equipo_id');
        $nombre_equipo = $request->input('nombre_equipo');

        $mytime = Carbon::now()->format('Y-m-d H:i:s');
        $juego = Juego::where('estatus', '1')->first();

        $jugador = Ronda::create([
            'juego_id' => $juego->id,
            'equipo_id' => $equipo_id,
            'fecha_hora' => $mytime,
            'estatus' => 1
        ]);

        $nombre = Equipo::where('id', $jugador->equipo_id)->first();
        $nombreJugador = $nombre->nombre;


        event(new Notificar($nombreJugador));

        return view('jugadores.esperados', compact('equipo_id', 'nombre_equipo'));
    }

    public function espera(Request $request)
    {
        $equipo_id = $request->input('equipo_id');
        $nombre_equipo = $request->input('nombre_equipo');
        return view('jugadores.espera', compact('nombre_equipo', 'equipo_id'));
    }
}
