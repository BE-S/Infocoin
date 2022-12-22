<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Jobs\Client\CoinGecko;
use App\Models\Client\Coin\Coin;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;

class DescriptionController extends Controller
{
    public function index($name)
    {
        $client = new CoinGeckoClient();
        $coinData = new CoinGecko($client);

        $coin = Coin::where('name', $name)->first();

        $historicalPrice = $coinData->getHistoricalPrice($coin->name);
        $marketData = $coinData->getMarketData($client, $coin->name);

        return view('Client.description', compact('coin', 'coinData', 'historicalPrice', 'marketData'));
    }
}
