<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngredientesController extends Controller
{
    public function index(){
        return view('ingrediente.index');
    }
    public function create(){
        return view('ingrediente.create');
    }
    public function show($ingredientes){
        return view('ingrediente.show',['ingrediente'=> $ingredientes]);
    }
}
