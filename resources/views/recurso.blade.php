@extends('plantilla')
@section('title')
Miweb - Home
@endsection
@section('contenido')
<h1>Recurso</h1>
<p>Route::get('recurso',[ResourceController::class,'index'])->name('recurso');</p>
@endsection

