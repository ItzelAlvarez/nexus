<?php

namespace App\Http\Controllers;

use App\Models\Archivo;
use App\Models\Producto;
use App\Models\Salida;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class SalidaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salidas = Auth::user()->salidas;
        return view('salida.Index', compact('salidas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = auth()->user();
        $productos = Producto::all();
        return view('salida.form-create', compact('productos', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'producto_id' => 'required|exists:productos,id',
            'cantidad' => 'integer|min:1|required',
        ]);
        $salida = Salida::create($request->all());

        //archivos 
        if($request->file('archivo')->isValid()){
            $ubicacion = $request->archivo->store('salidas');
            $archivo = new Archivo();
            //$archivo->salida_id = $salida->id;
            $archivo->ubicacion = $ubicacion;
            $archivo->mime = '';
            $archivo->nombre_original = $request->archivo->getClientOriginalName();
            $salida->archivos()->save($archivo);


        }
        return redirect()->route('salidas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function show(Salida $salida)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function edit(Salida $salida)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Salida $salida)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Salida  $salida
     * @return \Illuminate\Http\Response
     */
    public function destroy(Salida $salida)
    {
        //
    }

    public function descargaArchivo(Archivo $archivo){
        return Storage::download($archivo->ubicacion);
    }
}
