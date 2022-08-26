<?php


namespace App\Http\Controllers;


class EstadosController
{
    public function index(){
        return view('estados/index');
    }
    public function registrar(){
        return view('estados/registrar');
    }
}