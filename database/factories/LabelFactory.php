<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Label;
use App\Models\Proyect;

class LabelFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Label::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'label_name' => $this->faker->regexify('[A-Za-z0-9]{40}'),
            'proyect_id' => Proyect::factory(),
        ];
    }
}
