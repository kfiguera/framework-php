<?php


namespace App\Http\Controllers;

use App\Http\Response;

class HomeController
{
    public function index(){
        return new Response('home/index');
    }
    public function contacto(){
        return new Response('home/contacto');
    }
    public function servicios(){
        return new Response('home/servicios');
    }
}