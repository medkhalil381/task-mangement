<?php

namespace Database\Factories;

use App\Models\CV;
use Illuminate\Database\Eloquent\Factories\Factory;

class CVFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = CV::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'experience' => $this->faker->text,
        'competance' => $this->faker->text,
        'section' => $this->faker->text,
        'nomprofile' => $this->faker->text,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
