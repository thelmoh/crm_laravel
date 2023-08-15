<?php

namespace Database\Seeders;

use App\Models\ProdutoContrato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProdutosContratosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProdutoContrato::factory(50)->create();
    }
}
