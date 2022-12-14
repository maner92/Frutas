<?php

namespace App\Http\Controllers;

use App\Http\Requests\frutas;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class Paginas extends Controller
{
    function fhome()
    {
        return view('frutitas');
    }

    function fingresar()
    {
        return view('form');
    }


    /*public function procesarRecuerdos(Request $req){
        //return "Tu recuerdo se esta Procesando";
        if(request()->filled("txtTitulo")){
            return "Se llenó el titulo: ".request()->input("txtTitulo");
        }
            return "No se llenó el titulo";
    }*/

    public function procesarRecuerdos(frutas $req)
    {
        //return $req->all();
        return redirect('/crear')->with('confirmacion', 'Tu recuerdo llegó al controlador');
    }
}
