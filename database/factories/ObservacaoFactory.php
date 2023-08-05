<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Contrato;
use App\Models\Observacao;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Observacao>
 */
class ObservacaoFactory extends Factory
{
    protected $model = Observacao::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'observacao' => $this->faker->text(),
            'prazo' => $this->faker->date(),
            'tarefa' => $this->faker->randomNumber(8),
            'url_tarefa' => $this->faker->url(),
            'contrato_id' => Contrato::factory()
        ];
    }
}
