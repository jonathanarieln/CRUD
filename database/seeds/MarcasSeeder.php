<?php

use Illuminate\Database\Seeder;

class MarcasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::delete('DELETE FROM Marcas');
      factory(\App\Marca::class, 50)->create();
    }
}
