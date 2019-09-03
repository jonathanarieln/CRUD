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
    <ul>
        <li>Para mostrar todos los registros de la tabla Marcas vamos a usar un view que utilice la plantilla blade,
            una funcion del controlador para manejar los datos y un ruta para poder accesar a la pagina.</li>
        <li>Cada campo de una consulta que origina un objeto eloquent se trata como un atributo.</li>
        <li>Cuando un objeto de eloquent es impreso en pantalla (tratado como string), se imprime una representación
            en JSON de cada usuario.</li>
    </ul>
@endsection

@section('boton-columna1', '')
@section('enlace-boton-columna1', '')

@section('titulo-columna2', 'Detalle de Marca')
@section('contenido-columna2')
    <table class = "table table-light">
        <thead>
        <tr>
            <th>Nombre</th>
            <th>Codigo</th>
            <th>Nombre Proveedor</th>
            <th>Editar</th>
            <th>Eliminar</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{$Marca->Nombre}}</td>
                <td>{{$Marca->Codigo}}</td>
                <td>{{$Marca->proveedor->Nombre}}</td>
                <td><a href="{{route('MarcasEditar', ['Marca' => $Marca])}}">Editar</a></td>
                <td>
                    <form action="{{route('MarcasEliminar', ['Marca' => $Marca])}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
@section('boton-columna2')
    @parent
@endsection

@section('enlace-boton-columna2')
    {{route('Marcas')}}
@endsection

@section('pie', 'Mostrando todos los datos de una tabla')