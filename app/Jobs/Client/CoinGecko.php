<?php

namespace App\Jobs\Client;

use Illuminate\Contracts\Queue\ShouldQueue;
use Carbon\Carbon;

class CoinGecko implements ShouldQueue
{
    public $client;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($client)
    {
        $this->client = $client;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function getImage($coin, $size)
    {
        $coin = $this->client->coins()->getCoin($coin);

        return $coin['image'][$size];
    }

    public function getMarketData($client, $coin)
    {
        $coin = $client->coins()->getCoin($coin, ['tickers' => 'false']);

        $marketData = $coin['market_data'];

        return [
            'one_day' => $marketData['price_change_percentage_24h'],
            'one_week' => $marketData['price_change_percentage_7d'],
            'two_week' => $marketData['price_change_percentage_14d'],
            'one_mouth' => $marketData['price_change_percentage_30d'],
            'two_mouth' => $marketData['price_change_percentage_60d'],
            'one_year' => $marketData['price_change_percentage_1y']
        ];
    }

    public function getHistoricalPrice($coin) {
        $toDay = Carbon::now();
        $WeekAgo = Carbon::now()->subDays(7);
        $MonthAgo = Carbon::now()->subDays(30);

        return [
          'to_day' => $this->client->coins()->getHistory($coin, $toDay->format('d-m-Y')),
            'week_ago' => $this->client->coins()->getHistory($coin, $WeekAgo->format('d-m-Y')),
            'month_ago' => $this->client->coins()->getHistory($coin, $MonthAgo->format('d-m-Y')),
        ];
    }
}
