<?php

namespace App\Models\Client\Coin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popular extends Model
{
    public function getJoinCoin()
    {
        return $this->hasOne(Coin::class, 'id');
    }
}
