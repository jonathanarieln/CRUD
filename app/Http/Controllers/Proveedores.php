<?php

namespace App\Http\Controllers;

use App\Proveedor;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Proveedores extends Controller
{
    function index(){
        return view('inicio');
    }

    function Proveedores(){
        $Proveedores = Proveedor::all();
        return view('Proveedores.Proveedores', ['Proveedores' => $Proveedores]);
    }

    function Detalle2($ProveedorId){
        $Proveedor = Proveedor::findOrFail($ProveedorId);  // se usa orfail para capturar el error y mandar la pagina
                                                            // 404 de la carpeta errors
        return view('Proveedores.Detalle', ['Proveedor' => $Proveedor]);
    }

    function Detalle(Proveedor $Proveedor){
        return view('Proveedores.Detalle', ['Proveedor' => $Proveedor]);
    }

    function Nuevo(){
        return view('Proveedores.Nuevo');
    }

    function Crear(){
        $Datos = request()->validate([
            'Nombre' => 'required|max:50',
            'Codigo' => 'required|unique:Proveedores,Codigo|max:5', //pueden haber varias reglas divididas por |
            'RTN' => ['required','unique:Proveedores,RTN', 'size:14'], //pueden haber varias reglas dentro de un array
        ],[
            'Nombre.required' => 'Campo Nombre es obligatorio!',
            'Nombre.max' => 'Campo Nombre solo debe tener 50 caracteres!',
            'Codigo.required' => 'Campo Codigo es obligatorio!',
            'Codigo.unique' => 'Codigo ya fue utilizado!',
            'Codigo.max' => 'Campo Codigo solo debe tener 5 caracteres!',
            'RTN.required' => 'Campo RTN es obligatorio!',
            'RTN.unique' => 'RTN ya existe para otra empresa!',
            'RTN.size' => 'RTN tiene que tener 14 numeros!'
        ]); //->all() trae todos los datos de request

        $Proveedor = Proveedor::create(['Nombre'=> $Datos['Nombre'],
            'Codigo'=> $Datos['Codigo'],
            'RTN'=> $Datos['RTN']]);

        return  view('Proveedores.Detalle',  ['Proveedor' => $Proveedor]);
    }

    function Editar(Proveedor $Proveedor){
        return view('Proveedores.Editar', ['Proveedor' => $Proveedor]);
    }

    function Actualizar(Proveedor $Proveedor){
        $Datos = request()->validate([
            'Nombre' => 'required|max:50',
            'Codigo' => ['required',
                    Rule::unique('Proveedores')->ignore($Proveedor->ProveedorId, 'ProveedorId'),
                    'max:5'],
            'RTN' => ['required','size:14',
                Rule::unique('Proveedores')->ignore($Proveedor->ProveedorId, 'ProveedorId')]
        ],[
            'Nombre.required' => 'Campo Nombre es obligatorio!',
            'Nombre.max' => 'Campo Nombre solo debe tener 50 caracteres!',
            'Codigo.required' => 'Campo Codigo es obligatorio!',
            'Codigo.unique' => 'Codigo ya fue utilizado!',
            'Codigo.max' => 'Campo Codigo solo debe tener 5 caracteres!',
            'RTN.required' => 'Campo RTN es obligatorio!',
            'RTN.unique' => 'RTN ya existe para otra empresa!',
            'RTN.size' => 'RTN tiene que tener 14 numeros!'
        ]);

        $Proveedor->update($Datos);
        return view('Proveedores.Detalle', ['Proveedor' => $Proveedor]);
    }

    function Borrar(Proveedor $Proveedor){
        $Proveedor->delete();

        return redirect()->route('Proveedores');
    }
}
