<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Client\Coin\Coin;
use App\Models\Client\Coin\Popular;
use App\Models\Client\Coin\Stable;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class HomeController extends Controller
{
    public function index()
    {
        return view('Client.home');
    }
}
