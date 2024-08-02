<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cursocontroller extends Controller
{
    public function index(){
        return "Bienvenido a la pagina cursos";
    }     
    public function create(){
        return "en esta pagina podras crear un curso";
    }

    public function show($curso){
        return "Bienvenido al curso $curso";
    }
    
}
