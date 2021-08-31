<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    public function index(){
        return view('ingredientes.index');
    }
    public function create(){
        return view('ingredientes.create');
    }
    public function show($ingredientes){
        return view('ingredientes.show',['ingredientes'=> $ingredientes]);
    }
}
