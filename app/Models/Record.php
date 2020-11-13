<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $fillable = [
        'from_statement', 'financial_instrument_code', 'action', 'entry_price', 'closed_price',
        'take_profit_1','stop_loss_1', 'signal_result', 'status', 'statement_batch', 'closed_on'
    ];

    public $timestamps = false;

}
