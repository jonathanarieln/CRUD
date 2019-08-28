@extends('Plantilla')

//Titulo
@section('titulo', 'Pagina no encontrada')

//Encabezado
@section('titulo-principal', 'Pagina no encontrada')
@section('descripcion-titulo-principal', 'La pagina solicitada no existe')
@section('boton-principal')
    @parent
@endsection
@section('enlace-boton-principal')
    {{route('Proveedores')}}
@endsection
@section('texto-boton-principal', 'Proveedores')

//Columna 1
@section('titulo-columna1', '')
@section('contenido-columna1', '')

@section('boton-columna1', '')
@section('enlace-boton-columna1', '')

//Columna 2
@section('titulo-columna2', '')
@section('contenido-columna2', '')
@section('boton-columna2', '')
@section('enlace-boton-columna2', '')

//Pie
@section('pie', 'Pagina no encontrada')