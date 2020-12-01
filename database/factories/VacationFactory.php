<?php

namespace Database\Factories;

use App\Models\Vacation;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;


class VacationFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Vacation::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'from' => $this->faker->date(),
            'to' => $this->faker->date(),
            'user_id' => User::factory()->create()->id,
                        //date-time fake to check
        ];
    }
}
