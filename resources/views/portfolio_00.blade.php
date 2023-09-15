<?php $rol='ggg' ;
$porfolios = ['project1','project2','project3','project4','project5','project6','project7','project8','project9'];
?>
@extends('plantilla')
@section('title')
Miweb - About
@endsection
@section('contenido')
    <h1>Portfolio</h1>
    @if ($rol == 'A')
    <p>Hola Admin</p>
    @else
        <p>Hola Otro</p>
    @endif

    @foreach ($porfolios as $portfolio)
        @if( $loop->odd) 
            <?php $clase = 'impar'; // para que uso Blade??  ?>
        @else 
            @php
                $clase = 'par'
            @endphp  
        @endif
        <p class="{{ $clase}}"> {{ $portfolio }}  
                 <small>{{ $loop->first ? 'es el primero': ''}}</small>      
        </p>
    @endforeach

@endsection

