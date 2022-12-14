<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\frutas;


class FrutitasC extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consultaFrutas = DB::table('frutitas')->get();
        return view('frutitas', compact('consultaFrutas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(frutas $req)
    {
        DB::table('frutitas')->insert([
            "nombre" => $req->input('txtNombre'),
            "precio" => $req->input('txtPrecio'),
            "temporada" => $req->input('txtTemporada'),
            "stock" => $req->input('txtStock'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);
        return redirect('fruta')->with('mensaje', 'Fruta guardada');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $frutaid = DB::table('frutitas')->where('idFru', $id)->first();
        return view('update', compact('frutaid'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        DB::table('frutitas')->where('idFru', $id)->update([
            "nombre" => $req->input('txtNombre'),
            "precio" => $req->input('txtPrecio'),
            "temporada" => $req->input('txtTemporada'),
            "stock" => $req->input('txtStock'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('fruta')->with('mensaje', 'tu recuerdo se ha actualizado');
    }

    public function confirm($id)
    {
        $frutaid = DB::table('frutitas')->where('idFru', $id)->first();
        return view('confirm', compact('frutaid'));
    }

    public function destroy($id)
    {
        DB::table('frutitas')->where('idFru', $id)->delete();
        return redirect('fruta')->with('mensaje', "Recuerdo borrado");
    }
}
