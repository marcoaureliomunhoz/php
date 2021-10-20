<?php

namespace Database\Factories;

use App\Models\Editora;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EditoraFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Editora::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id' => $this->faker->numberBetween(1, 1000),
            'nome' => $this->faker->company()
        ];
    }
}
