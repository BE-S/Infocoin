<?php

namespace App\Models\Client\Coin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function getListCoin()
    {
        return $this->hasMany(Coin::class, 'category_id', 'id');
    }
}
