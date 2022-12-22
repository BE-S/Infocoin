<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Jobs\Client\CoinGecko;
use App\Models\Client\Coin\Category;
use App\Models\Client\Coin\Coin;
use Codenixsv\CoinGeckoApi\CoinGeckoClient;
use Illuminate\Http\Request;


class CategoryController extends Controller
{
    public function index($name)
    {
        $client = new CoinGeckoClient();
        $coinData = new CoinGecko($client);

        $category = Category::where('category', $name)->first();
        $countCoins = Coin::countCoins();

        return view('Client.coins', compact('category', 'coinData', 'countCoins'));
    }

    public function pages(Request $request)
    {
        $client = new CoinGeckoClient();
        $coinData = new CoinGecko($client);

        $category = Category::where('category', $request->segment)->first();

        $pageNum = $request->pageNum;

        return [
            'layout' => view('layouts.table', compact('coinData', 'category', 'pageNum')),
            'button' => Coin::countCoins()
        ];
    }
}
