@extends('Plantilla')

@section('titulo', 'CRUD Usando Laravel')

@section('titulo-principal', 'CRUD Usando Laravel')
@section('descripcion-titulo-principal', 'Este es un ejemplo para realizar el CRUD de una tabla usando Laravel')
@section('boton-principal')
    @parent
@endsection
@section('enlace-boton-principal', 'https://laravel.com')
@section('texto-boton-principal', 'Laravel')

@section('titulo-columna1', 'CRUD')
@section('contenido-columna1')
    <p>En informática, <em>CRUD</em> es el acrónimo de "Crear, Leer, Actualizar y Borrar" (del original en inglés:
        Create, Read, Update and Delete)
    </p>
@endsection
@section('boton-columna1')
    @parent
@endsection
@section('enlace-boton-columna1', 'https://es.wikipedia.org/wiki/CRUD')

@section('titulo-columna2', 'Tabla Proveedores')
@section('contenido-columna2')
      <p>El CRUD desarrollado en este ejemplo, se realizara en la tabla <em>Proveedores</em>
       La cual tiene cinco campos ProveedorId, Nombre, Codigo, RTN, created_at y updated_at</p>

       <p>Y para fines didacticos uzaremos la tabla <em>Marcas</em>
        La cual tiene seis campos MarcaId, ProveedorId, Nombre, Codigo, created_at y updated_at;
        cabe señalar que el campo ProveedorId sera llave foranea de la tabla Proveedores</p>
@endsection

@section('boton-columna2')
    @parent
@endsection

@section('enlace-boton-columna2')
    {{route('Proveedores')}}
@endsection

@section('pie', 'CRUD Usando Laravel')
