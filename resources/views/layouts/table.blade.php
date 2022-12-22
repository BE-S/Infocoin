<table class="list-coins">
    <tr id="title-table">
        <th>Название</th>
        <th>Текущая цена</th>
        <th>7 дней назад</th>
        <th>30 дней назад</th>
    </tr>
    @foreach($category->getListCoin->skip($pageNum)->take(5) as $coin)
        <tr class="row-coin">
            <td class="logo-coin">
                <a class="block" href="{{ route('get.description.coin.name', $coin->name) }}">
                    <img src="{{$coinData->getImage($coin->name, 'large')}}">
                    <p>{{ucwords(strtolower($coin->name))}}</p>
                </a>
            </td>
                @foreach($coinData->getHistoricalPrice($coin->name) as $price)
                    <td class="price-coin">
                        <div class="price">
                            {{ number_format($price['market_data']['current_price']['rub'], 2, ',', ' ') . ' ' . 'руб.' }}
                        </div>
                    </td>
                @endforeach
        </tr>
    @endforeach
</table>
