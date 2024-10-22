<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Proyect;

class ProyectFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Proyect::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'proyect_name' => $this->faker->regexify('[A-Za-z0-9]{50}'),
        ];
    }
}
