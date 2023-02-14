<?php

namespace App\Http\Controllers;

use App\Models\pru_usuarios;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PruUsuariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $model = DB::query();
        
            return  $model;
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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\pru_usuarios  $pru_usuarios
     * @return \Illuminate\Http\Response
     */
    public function show(pru_usuarios $pru_usuarios)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\pru_usuarios  $pru_usuarios
     * @return \Illuminate\Http\Response
     */
    public function edit(pru_usuarios $pru_usuarios)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\pru_usuarios  $pru_usuarios
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, pru_usuarios $pru_usuarios)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\pru_usuarios  $pru_usuarios
     * @return \Illuminate\Http\Response
     */
    public function destroy(pru_usuarios $pru_usuarios)
    {
        //
    }
}
