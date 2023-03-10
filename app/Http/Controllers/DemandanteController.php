<?php

namespace App\Http\Controllers;

use App\Models\Demandante;
use Illuminate\Http\Request;

class DemandanteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $demandantes = Demandante::all();

        return response()->json($demandantes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request)
    {
        $demandante = new Demandante;
        $demandante->name = $request->name;
        $demandante->edad = $request->edad;
        $demandante->email = $request->email;


        $demandante->save();
        $data  = [
            'message' => 'Demandante guardado de manera correcta',
            'demandante' => $demandante
        ];

        return response()->json($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function show(Demandante $demandante)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function edit(Demandante $demandante)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Demandante $demandante)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Demandante  $demandante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Demandante $demandante)
    {
        //
    }
}
