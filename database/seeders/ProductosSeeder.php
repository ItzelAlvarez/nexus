<?php

namespace Database\Seeders;

use App\Models\Producto;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Producto::create(['nombre' => 'Lapiz', 'user_id'=>1, 'categoria_id' => 1 , 'existencias' => 10, 'precio' => 5]);
        Producto::create(['nombre' => 'Borrador', 'user_id'=>1, 'categoria_id' => 1 , 'existencias' => 15, 'precio' => 3]);
        Producto::create(['nombre' => 'Jabon para manos', 'user_id'=>1, 'categoria_id' => 2 , 'existencias' => 18, 'precio' => 45]);

        Producto::factory(5)->create();
    }
}
