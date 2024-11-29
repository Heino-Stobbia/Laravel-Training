<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\transaction;

class TransactionSeeder extends Seeder
{
    use HasFactory;
    public function run(): void
    {
        DB::beginTransaction();

        try {
            transaction::factory()->count(10)->create();

            DB::commit();
        } catch (\Throwable $response) {
            DB::rollback();
            dd($response);
        }
    }
}
