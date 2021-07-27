<?php

namespace Database\Factories;

use App\Models\UserBalance;
use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserBalanceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = UserBalance::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //
            'user_id' => $this->faker->numberBetween(1, 10),
            'value' => $this->faker->randomFloat(2, -1000, 1000),
            'balance' => $this->faker->randomFloat(2, -1000, 1000)
        ];
    }
}
