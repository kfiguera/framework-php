<?php


namespace App\Http\Controllers;


class HomeController
{
    public function index(){
        return view('home/index');
    }
    public function contacto(){
        return view('home/contacto');
    }
    public function servicios(){
        return view('home/servicios');
    }
}