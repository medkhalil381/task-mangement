<?php

namespace Database\Factories;

use App\Models\produitees;
use Illuminate\Database\Eloquent\Factories\Factory;

class produiteesFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = produitees::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom' => $this->faker->text,
        'prix' => $this->faker->randomDigitNotNull,
        'description' => $this->faker->text,
        'date' => $this->faker->word,
        'created_at' => $this->faker->date('Y-m-d H:i:s'),
        'updated_at' => $this->faker->date('Y-m-d H:i:s')
        ];
    }
}
