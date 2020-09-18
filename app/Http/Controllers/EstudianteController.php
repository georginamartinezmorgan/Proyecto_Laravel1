<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index(){
        return  view('raizEstudiante');
    }

    public function crear(){
        return view('crear');
    }





    public function lista(){
        $lista =array("Ana","Marcos" ,"Johana");
        return view('cursos',$lista);
    }



    public function mostrar(){
        return view("EjemplosVistas/usuario")
            ->with([
                "usuarios" => [
                    "Luis Moran",
                    "Maggie",
                    "Raúl"
                ],
                "titulo" => "Soy un título"
            ]);
    }


    public function mo(){
        return view("EjemplosVistas/Titulo")
            ->with([
                "usuarios" => [
                    "Luis Mpran",
                    "Maggie",
                    "Raúl"
                ],
                "titulo" => "Soy un título"
            ]);
    }

}
