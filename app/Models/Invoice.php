<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use function Ramsey\Uuid\v4;


class Invoice extends Model
{

    use HasFactory;
    //
    protected $fillable = [
        'user_id',
        'invoice_number',
        'amount',
    ];
}
