<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Cliente;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cliente>
 */
class ClienteFactory extends Factory
{
    protected $model = Cliente::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition(): array
    {
        return [
            'nome' => $this->faker->name(),
            'cnpj' => strval(rand(11111111111111,99999999999999)),
            'endereco' => $this->faker->words(4,true),
            'numero' => strval(rand(0,999)),
            'bairro' => $this->faker->words(2, true),
            'complemento' => $this->faker->words(3,true),
            'cidade' => $this->faker->name(),
            'uf' => 'RN',
            'cep' => '59.000-000',
            'telefone' => '84999999999',
            'celular' => '84911112222',
            'email' => $this->faker->email(),
            'responsavel' => $this->faker->words(5, true)
        ];
    }
}
