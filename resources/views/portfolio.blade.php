<?php $rol='ggg' ;
$porfolios = ['project1','project2','project3','project4','project5','project6','project7','project8','project9'];
?>
@extends('plantilla')
@section('title')
Miweb - portfolio
@endsection
@section('contenido')
    @if ($rol == 'A')
    <p>Hola Admin</p>
    @else
        <p>Hola Otro</p>
    @endif

    @foreach ($porfolios as $portfolio)
        <p class="{{setParImpar($loop->odd)}}">
             {{ $portfolio }}  
              <small>{{ $loop->first ? 'es el primero': ''}}</small>      
        </p>
    @endforeach

@endsection

