<?php

namespace Database\Factories;

use App\Models\ProdutoContrato;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ProdutoContrato>
 */
class ProdutoContratoFactory extends Factory
{
    protected $model = ProdutoContrato::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'contrato_id' => rand(1,10),
            'produto_id' => rand(1,10),
            'quantidade' => rand(1,5),
            'valor' => $this->faker->randomFloat(2, 1000, 9000)
        ];
    }
}
