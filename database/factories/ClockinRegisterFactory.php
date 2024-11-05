<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\ClockinRegister;
use App\Models\Proyect;

class ClockinRegisterFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClockinRegister::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'description' => $this->faker->text(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'total_time' => $this->faker->time(),
            'category_id' => $this->faker->word(),
            'user_id' => ::factory(),
            'proyect_id' => Proyect::factory(),
        ];
    }
}
