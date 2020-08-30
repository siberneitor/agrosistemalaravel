<?php

namespace App\Http\Controllers;
use App\tabla2;

use Illuminate\Http\Request;

class contrCrud extends Controller
{
    public function insertar(Request $request){
       // return 'estas en la funcion insertar de contr';

        /**
         * Creamos la instancia de la clase registro
         */
        $registro = new tabla2;

        /* Realizamos la asignación masiva */
        $registro->campo1 = 'uno';
        $registro->campo2 = 'dos';
        $registro->campo3 = 'tres';
        /**
         * Se repite con los demás datos que desees asignar...
         */

        $registro->save();

        return "regisro creado ";

    }

    public function mostrar(){
        return 'estas en la funcion mostrar de contr';

        $var = new tabla2;

        $var->select('campo2')->get();

        print_r( $var) ;
        if($var){
            echo 'OK';
        }

    }



}
