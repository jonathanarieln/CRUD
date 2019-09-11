@extends('Plantilla')

@section('titulo', 'Tiene Marcas')

@section('titulo-principal', 'Proveedor tiene marcas')
@section('descripcion-titulo-principal', 'No puede eliminar dicho proveedor por que aun posee marcas para eliminarno debe eliminar las marcas primero')
@section('boton-principal')
    @parent
@endsection
@section('enlace-boton-principal')
    {{route('Proveedores')}}
@endsection
@section('texto-boton-principal', 'Proveedores')

@section('titulo-columna1', '')
@section('contenido-columna1', '')

@section('boton-columna1', '')
@section('enlace-boton-columna1', '')

@section('titulo-columna2', '')
@section('contenido-columna2', '')
@section('boton-columna2', '')
@section('enlace-boton-columna2', '')

@section('pie', 'Proveedor con marcas')