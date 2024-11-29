<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class transaction extends Model {

    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'transaction_number',
        'amount',
        'invoice_id',
    ];

}
