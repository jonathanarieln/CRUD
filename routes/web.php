<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'Proveedores@index')->name('inicio');
Route::get('/Proveedores', 'Proveedores@Proveedores')->name('Proveedores');

Route::get('/Proveedores/{Proveedor}', 'Proveedores@Detalle')->where('Proveedor', '\d+')
    ->name('ProveedoresDetalle'); // ruta para enlazar el modelo con la peticion url

Route::get('/Proveedores2/{ProveedorId}', 'Proveedores@Detalle2')->where('ProveedorId', '\d+')
    ->name('ProveedoresDetalle2');

Route::get('/Proveedores/Nuevo', 'Proveedores@Nuevo')->name('ProveedoresNuevo');
Route::post('/Proveedores/Crear', 'Proveedores@Crear')->name('ProveedoresCrear');
Route::get('/Proveedores/{Proveedor}/Editar', 'Proveedores@Editar')->where('Proveedor', '\d+')
    ->name('ProveedoresEditar');
Route::put('/Proveedores/{Proveedor}', 'Proveedores@Actualizar')->where('Proveedor', '\d+')
    ->name('ProveedoresActualizar');
Route::delete('/Proveedores/{Proveedor}', 'Proveedores@Borrar')->where('Proveedor', '\d+')
    ->name('ProveedoresEliminar');



    Route::get('/Marcas', 'Marcas@Marcas')->name('Marcas');

    Route::get('/Marcas/{Marca}', 'Marcas@Detalle')->where('Marca', '\d+')
        ->name('MarcasDetalle'); // ruta para enlazar el modelo con la peticion url

    Route::get('/Marcas2/{MarcaId}', 'Marcas@Detalle2')->where('MarcaId', '\d+')
        ->name('MarcasDetalle2');

    Route::get('/Marcas/Nuevo', 'Marcas@Nuevo')->name('MarcasNuevo');
    Route::post('/Marcas/Crear', 'Marcas@Crear')->name('MarcasCrear');
    Route::get('/Marcas/{Marca}/Editar', 'Marcas@Editar')->where('Marca', '\d+')
        ->name('MarcasEditar');
    Route::put('/Marcas/{Marca}', 'Marcas@Actualizar')->where('Marca', '\d+')
        ->name('MarcasActualizar');
    Route::delete('/Marcas/{Marca}', 'Marcas@Borrar')->where('Marca', '\d+')
        ->name('MarcasEliminar');




