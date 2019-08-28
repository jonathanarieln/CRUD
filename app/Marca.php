<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marca extends Model
{
    protected $primaryKey = 'MarcaId';
    protected $table = 'Marcas';
    protected $fillable = ['ProveedorId','Codigo', 'Nombre'];
}
