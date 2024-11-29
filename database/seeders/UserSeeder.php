<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{

    use HasFactory;

    public function run(): void
    {

        // User::factory()->count(1)->create();

        // try {
        //     USer::findOrFail(7);
        // } catch (\Throwable $th) {
        //     dd('Oops...');
        // }

        $users = [
            [
                'name' => 'Heino',
                'email' => 'heino@nwk.co.za',
                'password' => Hash::make('password'),
            ],
            [
                'name' => 'Vikus',
                'email' => 'vikus@example.com',
                'password' => Hash::make('password'),
            ],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        //     'password' => Hash::make('password'),
        // ]);
    }
}
