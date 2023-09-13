<?php

namespace App\Http\Controllers;

use App\Models\Equipo;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $equipos = Equipo::get();
        return view('equipos.index', compact('equipos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nombre = $request->input('nombre');
        $clave = $request->input('clave');
        $mytime = Carbon::now()->format('Y-m-d H:i:s');


        Equipo::create([
            "nombre" => $nombre,
            "fecha_hora_registro" => $mytime,
            "estatus" => 1,
            "clave" => $clave
        ]);
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
        $equipo = Equipo::find($id);

        return view('equipos.edit', compact('equipo'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $equipo = Equipo::find($id);

        $equipo->nombre = $request->input('nombre');
        $equipo->clave = $request->input('clave');

        $equipo->save();

        return redirect()->route('equipos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $equipo = Equipo::find($id);

        $equipo->delete();

        return redirect()->route('equipos.index');
    }
}
