@extends('layouts.plantilla')

@section('title','Cliente'.$cliente->nombre)

@section('content')
    <h1>Bienvenido al cliente :{{$cliente->nombre}} </h1>
@endsection
