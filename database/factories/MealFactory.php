<?php

namespace Database\Factories;

use App\Models\Meal;
use Illuminate\Database\Eloquent\Factories\Factory;

class MealFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Meal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           "name"=>$this->faker->realText($maxNbChars = 20, $indexSize = 2) ,
           "time_to_cook"=> $this->faker->numberBetween($min = 10, $max = 250)
        ];
    }
}
