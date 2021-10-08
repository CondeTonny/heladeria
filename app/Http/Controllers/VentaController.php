<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VentaController extends Controller
{
    public function index(){
        return view('ventas.index');
    }
    public function create(){
        return view('ventas.create');
    }
    public function show($venta){
        return view('ventas.show',['venta'=> $venta]);
    }
}
