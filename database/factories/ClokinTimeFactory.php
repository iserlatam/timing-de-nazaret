<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\;
use App\Models\ClokinTime;
use App\Models\Proyect;

class ClokinTimeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ClokinTime::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'description' => $this->faker->text(),
            'start_time' => $this->faker->time(),
            'end_time' => $this->faker->time(),
            'total_time' => $this->faker->time(),
            'labels' => '{}',
            'proyect_id' => Proyect::factory(),
            'user_id' => ::factory(),
        ];
    }
}
