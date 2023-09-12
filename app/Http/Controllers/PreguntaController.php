<?php

namespace App\Http\Controllers;

use App\Events\MessageSent;
use App\Models\Juego;
use App\Models\Pregunta;
use App\Models\Ronda;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PreguntaController extends Controller
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

    public function tablero(){
        $preguntas = Pregunta::get();
        return view('preguntas.tablero', compact('preguntas'));
    }

    public function unaPregunta($id){
        $pregunta = Pregunta::find($id);
        $boton = "boton activado";
        // Se manda llamar aqui el evento que se creo para activar el botón al jugador
        event(new MessageSent($boton));

        return view('preguntas.laPregunta', compact('pregunta'));
    }
    // Función para cuando la pregunta ya se respondio se cambie estatus y se acabe el juego
    public static function cambioEstatus($id)
    {

        $pregunta = Pregunta::find($id);
        $pregunta->estatus = 0;
        $pregunta->save();

        Ronda::where('estatus', '1')->update(['estatus' => '0', 'pregunta_id' => $id]);

        Juego::where('estatus', '1')->update(['estatus' => '0']);

        $mytime = Carbon::now()->format('Y-m-d H:i:s');

        $juego = Juego::create([
            "estatus"                => '1',
            "fecha_hora"             => "$mytime",
            "inicio"                => '0'
        ]);

        return redirect()->route('tableroPreguntas');
    }

}
