<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladosController extends Controller
{
    public function index(){
        return view('helado.index');
    }
    public function create(){
        return view('helado.create');
    }
    public function show($helados){
        return view('helado.show',['helado'=> $helados]);
    }
}
