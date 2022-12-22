<?php

namespace App\Models\Client\Coin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Coin extends Model
{
    protected $guarded = [];

    public static function countCoins() {
        return count(
            Coin::all()
        );
    }
}
