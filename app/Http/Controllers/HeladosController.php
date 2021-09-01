<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HeladosController extends Controller
{
    public function index(){
        return view('helados.index');
    }
    public function create(){
        return view('helados.create');
    }
    public function show($helados){
        return view('helados.show',['helados'=> $helados]);
    }
}