@extends('Plantilla')

//Titulo
@section('titulo', 'Editar Marca')

//Encabezado
@section('titulo-principal', 'Editar Marca')
@section('descripcion-titulo-principal', 'Este es un ejemplo para mostrar como se editan registros de una tabla')
@section('boton-principal')
    @parent
@endsection
@section('enlace-boton-principal')
    {{route('MarcasEditar', ['Marca' => $Marca])}}
@endsection
@section('texto-boton-principal', 'Editar Marca')

//Columna 1
@section('titulo-columna1', 'Descripcion')
@section('contenido-columna1')
    <ul>
        <li>Crear un nueva view con los datos de la view crear <br>
            en los valores de cada campo cargar los valores del Marca <br>
            value="{ { old('Codigo', $Marca->Codigo) } }" <br>
            enviar como segundo parámetro el valor que se espera aparesca en el campo.
        </li>
        <li>Crear una nueva ruta de método Put</li>
        <li>Para enviar el form que lleva los datos a actualizar hay que mandarlos bajo el método put, <br>
            pero los form solo pueden tener El método get o post <br>
            por lo cual agregaremos el método con la función method_field, <br>
            la cual agrega un campo oculto a nuestro form. <br>
            {{'<form method="POST" action="">'}} <br>
            {{'{ { method_field(\'PUT\')} }'}}
        </li>
    </ul>
@endsection

@section('boton-columna1', '')
@section('enlace-boton-columna1', '')

//Columna 2
@section('titulo-columna2', 'Editar Marca')
@section('contenido-columna2')

    @if($errors->any())
        <div class="alert alert-danger">
            <p >Atencion!</p>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('MarcasActualizar', ['Marca' => $Marca])}}" method="POST">
        {{method_field('PUT')}}
        {{ csrf_field() }}

        <label for="Nombre">Nombre :</label>
        <input type="text" name="Nombre" placeholder="Nombre"  maxlength="50" id="Nombre" value="{{old('Nombre', $Marca->Nombre) }}" required>
        @if ($errors->has('Nombre'))
            <p class="text-danger">{{ $errors->first('Nombre') }}</p>
        @endif
        <br>
        <label for="Codigo">Codigo :</label>
        <input type="text" name="Codigo" placeholder="Codigo" maxlength="5" id="Codigo" value="{{old('Codigo', $Marca->Codigo)}}" required>
        @if ($errors->has('Codigo'))
            <p class="text-danger">{{ $errors->first('Codigo') }}</p>
        @endif
        <br>
        <label for="ProveedorId">ProveedorId :</label>
        <input type="text" name="ProveedorId" placeholder="ProveedorId" maxlength="5" value="{{old('ProveedorId', $Marca->Proveedor->ProveedorId)}}" id="ProveedorId" required>
        @if ($errors->has('ProveedorId'))
            <p class="text-danger">{{ $errors->first('ProveedorId') }}</p>
        @endif
        <button type="submit">Actualizar Marca</button>
    </form>
@endsection
@section('boton-columna2', '')
@section('enlace-boton-columna2', '')

//Pie
@section('pie', 'Editar Marca')