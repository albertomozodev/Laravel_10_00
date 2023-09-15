@extends('plantilla')
@section('title','Mi web - Contact')
@section('contenido')
<h1 >@lang('Contact')</h1>
@if ($errors->any())
{{ $errors }}
@foreach($errors->all() as $error)
    <p>{{ $error }}</p>
@endforeach
@endif
<form   method="POST"  action="" > 
    @csrf         
    <hr>
  
    <label for="name">Nombre</label><br>
    <input  id="name" name="name"  placeholder="Escribe aquí tu nombre..." value ="{{old('name')}}"> {{$errors->first('name')}}<br>
    <label for="email">Correo electrónico</label><br>
    <input  type="text" name="email" placeholder="Escribe aquí tu e-mail...">
    {{ $errors->first('email','<small>:message</small>') }}<br> 
    {!! $errors->first('email','<span class="par">:message</span>') !!}<br>
    <br>
    <label for="subject">Asunto</label><br>
    <input  id="subject"   name="subject" placeholder="Escribe aquí el asunto de tu mensaje..."><br>                 
    <textarea  id="content" name="content"  placeholder="Escribe aquí el contenido de tu mensaje..."></textarea><br>                 
    <button class="btn btn-primary btn-lg btn-block">@lang('Send')</button><br>
</form>

@endsection

