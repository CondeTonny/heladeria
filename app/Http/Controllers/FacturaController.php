<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FacturaController extends Controller
{
    public function index(){
        return view('factura.index');
    }
    public function create(){
        return view('factura.create');
    }
    public function show($factura){
        return view('factura.show',['factura'=> $factura]);
    }
}
