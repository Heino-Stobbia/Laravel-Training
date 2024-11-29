<?php

namespace Database\Seeders;

use App\Models\Invoice;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class InvoiceSeeder extends Seeder
{

    use HasFactory;

    public function run(): void
    {

        DB::beginTransaction();

        try {
            Invoice::factory()->count(10)->create();

            DB::commit();
        } catch (\Throwable $response) {
            DB::rollback();
            dd('Error encountered');
        }

        // DB::endTransaction();

       
    }
}
