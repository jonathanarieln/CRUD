@extends('Plantilla')

//Titulo
@section('titulo', 'Nuevo Marca')

//Encabezado
@section('titulo-principal', 'Nuevo Marca')
@section('descripcion-titulo-principal', 'Este es un ejemplo para mostrar como se crean nuevos registro en una tabla')
@section('boton-principal')
    @parent
@endsection
@section('enlace-boton-principal')
    {{route('MarcasNuevo')}}
@endsection
@section('texto-boton-principal', 'Nuevo Marca')

//Columna 1
@section('titulo-columna1', 'Descripcion')
@section('contenido-columna1')
    <ul>
        <li>Laravel nos ayuda a evitar los ataques CSRF, utilizando la sentencia { { csrf_field() } }
            En el inicio de cada formulario que mandemos, esta sentencia agregara un campo oculto con un TOKEN
            que validara nuestro sitio para evitar ser atacados</li>
        <li> request() función para obtener los datos.
            <ul>
            <li>- request()->all(); //Obtiene todos los datos y los regresa en un arreglo</li>
            <li>- request('Nombre'); //Obtiene el valor de la variable 'Nombre'</li>
            <li>- request()->email;//Obtiene el valor de la variable 'email'</li>
            <li>- request()->get('RTN');//Obtiene el valor de la variable 'RTN' </li>
            </ul>
        </li>
        <li> Validacion con validate <br>
            <br>
            $datos = request()->validate([<br>
                'Nombre' => 'required'<br>
            ],[<br>
                'Nombre.required' => 'El campo nombre es obligatorio'<br>
            ]);
        </li>
        <li>
            El tratamiento de los errores de validación se realiza en la misma vista de la captura se utiliza
            la variable $errors, Esta variable contiene todos los errores que se han generado en la sesión.
        </li>
    </ul>
@endsection

@section('boton-columna1', '')
@section('enlace-boton-columna1', '')

//Columna 2
@section('titulo-columna2', 'Nuevo Marca')
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

    <form action="{{route('MarcasCrear')}}" method="POST">
        {{ csrf_field() }}
        <label for="Nombre">Nombre :</label>
        <input type="text" name="Nombre" placeholder="Nombre" maxlength="50" id="Nombre" value="{{old('Nombre')}}" required>
        @if ($errors->has('Nombre'))
            <p class="text-danger">{{ $errors->first('Nombre') }}</p>
        @endif
        <br>
        <label for="Codigo">Codigo :</label>
        <input type="text" name="Codigo" placeholder="Codigo" maxlength="5" id="Codigo" value="{{old('Codigo')}}" required>
        @if ($errors->has('Codigo'))
            <p class="text-danger">{{ $errors->first('Codigo') }}</p>
        @endif
        <br>
        <label for="ProveedorId">ProveedorId :</label>
        <input type="text" name="ProveedorId" placeholder="ProveedorId" maxlength="5" id="ProveedorId" value="{{old('ProveedorId')}}" required>
        @if ($errors->has('ProveedorId'))
            <p class="text-danger">{{ $errors->first('ProveedorId') }}</p>
        @endif
        <br>
        <button type="submit">Crear nueva Marca</button>
    </form>
@endsection
@section('boton-columna2', '')
@section('enlace-boton-columna2', '')

//Pie
@section('pie', 'Nuevo Marca')