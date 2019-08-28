<?php

use Illuminate\Database\Seeder;
use \Illuminate\Support\Facades;

class ProveedoresSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::delete('DELETE FROM Proveedores');
        factory(\App\Proveedor::class, 50)->create();
    }
}
