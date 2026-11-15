<?php

namespace Database\Factories;

use App\Models\Seller;
use GuzzleHttp\Promise\State;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends Factory<Seller>
 */
class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' =>User::factory() -> State([
                'role'=>'seller',
            ]),
            'store_name'=>fake()->comany(),
            'descripyition'=>fake()->sentence(),
            
        ];
    }
}
