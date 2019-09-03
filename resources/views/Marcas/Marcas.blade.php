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
        <li>Para poder mostrar los datos del proveedor al cual hace referencia la llave foranea ubicada en la tabla marcas es necesario que
          modifiquemos ambos modelos en el de Proveedores indicaremos que puede tener muchas marcas creando en el modelo una funcion llamada
          marcas con la sentencia HasMany de la siguiente manera:
          return $this->hasMany<br>
            ('Marca::class','ProveedorId','ProveedorId');</li>
          <li>En lugar de usar 'Marca::class' tambien podriamos utilizar 'App\Marca'</li>
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

@section('pie', 'Mostrando todos los datos de la tabla Marcas')