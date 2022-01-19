<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;
     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'naira_balance',
        'dollar_balance',
        'euro_balance',
        'euro_balance',
        'yen_balance',
        'refferal_balance',
        'withdrawals',
        'deposits',
        'bitcoin_address',
        'ethereum_address',
        "usdt_address",
        "litecoin_address",


    ];
}
