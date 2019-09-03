@extends('Plantilla')

@section('titulo', 'CRUD Usando Laravel')

@section('titulo-principal', 'Marcas')
@section('descripcion-titulo-principal', 'Este es un ejemplo para mostrar todo el contenido de una tabla')
@section('boton-principal')
    @parent
@endsection
@section('enlace-boton-principal')
    {{route('Marcas')}}
@endsection
@section('texto-boton-principal', 'Mostrar Todos')

@section('titulo-columna1', 'Mostrar Datos')
@section('contenido-columna1')
    <ul xmlns:width="http://www.w3.org/1999/xhtml">
        <li>Para mostrar todos los registros de la tabla Marcas vamos a usar un view que utilice la plantilla blade,
            una funcion del controlador para manejar los datos y un ruta para poder accesar a la pagina.</li>
        <li>Cada campo de una consulta que origina un objeto eloquent se trata como un atributo.</li>
        <li>Cuando un objeto de eloquent es impreso en pantalla (tratado como string), se imprime una representación
            en JSON de cada usuario.</li>
    </ul>
@endsection

@section('boton-columna1', '')
@section('enlace-boton-columna1', '')

@section('titulo-columna2', 'Tabla Marcas')
@section('contenido-columna2')
    <table class = "table table-hover table-responsive">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Ver Detalle</th>
            <th>Marca JSON</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($Marcas as $Marca)
            <tr>
                <td>{{$Marca->Nombre}}</td>
                <td><a href="{{route('MarcasDetalle', ['Marca'=>$Marca->MarcaId])}}">Ver Detalles</a></td>
                <td>{{$Marca}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
@section('boton-columna2', '')
@section('enlace-boton-columna2', '')

@section('pie', 'Mostrando todos los datos de una tabla')