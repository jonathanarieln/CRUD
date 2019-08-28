<?php

namespace App\Http\Controllers;

use App\Marca;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class Marcas extends Controller
{
  function Marcas(){
      $Marcas = Marca::all();
      return view('Marcas.Marcas', ['Marcas' => $Marcas]);
  }

  function Detalle2($MarcaId){
      $Marca = Marca::findOrFail($MarcaId);  // se usa orfail para capturar el error y mandar la pagina
                                                          // 404 de la carpeta errors
      return view('Marcas.Detalle', ['Marca' => $Marca]);
  }

  function Detalle(Marca $Marca){
      return view('Marcas.Detalle', ['Marca' => $Marca]);
  }

  function Nuevo(){
      return view('Marcas.Nuevo');
  }

  function Crear(){
      $Datos = request()->validate([
          'Nombre' => 'required|max:50',
          'Codigo' => 'required|unique:Marcas,Codigo|max:5',
          'ProveedorId' => 'required',
      ],[
          'Nombre.required' => 'Campo Nombre es obligatorio!',
          'ProveedorId.required' => 'Campo ProveedorId es obligatorio!',
          'Nombre.max' => 'Campo Nombre solo debe tener 50 caracteres!',
          'Codigo.required' => 'Campo Codigo es obligatorio!',
          'Codigo.unique' => 'Codigo ya fue utilizado!',
          'Codigo.max' => 'Campo Codigo solo debe tener 5 caracteres!'
      ]); //->all() trae todos los datos de request

      $Marca = Marca::create(
        [
          'Nombre'=> $Datos['Nombre'],
          'Codigo'=> $Datos['Codigo'],
          'ProveedorId'=> $Datos['ProveedorId']
        ]
        );

      return  view('Marcas.Detalle',  ['Marca' => $Marca]);
  }

  function Editar(Marca $Marca){
      return view('Marcas.Editar', ['Marca' => $Marca]);
  }

  function Actualizar(Marca $Marca){
      $Datos = request()->validate([
          'Nombre' => 'required|max:50',
          'Codigo' => ['required',
                  Rule::unique('Marcas')->ignore($Marca->MarcaId, 'MarcaId'),
                  'max:5']
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

      $Marca->update($Datos);
      return view('Marcas.Detalle', ['Marca' => $Marca]);
  }

  function Borrar(Marca $Marca){
      $Marca->delete();

      return redirect()->route('Marcas');
  }
}
