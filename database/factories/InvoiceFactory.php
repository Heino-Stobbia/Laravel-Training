<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\transaction;
// use Database\Seeders\UserSeeder;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $users = User::whereIn('email', ['heino@example.com', 'vikus@example.com'])->get();
        $userIDs = $users->pluck('id')->toArray();

        return [
            // 'user_id' => User::first()->id,
            'user_id' => fake()->randomElement($userIDs),
            'invoice_number' => fake()->randomNumber(8),
            'amount' => fake()->randomNumber(3),
        ];
    }
}
