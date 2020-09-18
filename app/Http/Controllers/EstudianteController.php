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
<<<<<<< HEAD
                    "Luis Moran",
=======
                    "Luis Mora ",
>>>>>>> 18994afe5632079c025d11511e02dc52feb3fce1
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
<<<<<<< HEAD
                    "Luis Mpran",
                    "Pedro "
=======
                    "Luis Mora",
>>>>>>> 18994afe5632079c025d11511e02dc52feb3fce1
                    "Maggie",
                    "Raúl"
                ],
                "titulo" => "Soy un título"
            ]);
    }

}
