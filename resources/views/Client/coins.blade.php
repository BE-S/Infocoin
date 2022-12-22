@extends('layouts.tamplate')

@section('content')

    <div class="line"></div>

    <section id="seven">
        <div class="block left">
            <div>
                {{$category->discription}}
            </div>
        </div>
        <div class="block image" style="width: 70%">
            <div style="width: 19vw">
            @foreach($category->getListCoin->take(3) as $coin)
                <div class="coin" id="{{$coin->name}}">
                    <img src="{{$coinData->getImage($coin->name, 'large')}}">
                    <p>{{ucwords(strtolower($coin->name))}}</p>
                </div>
            @endforeach
            </div>
        </div>
    </section>

    <div class="line"></div>

    <section id="eight">
        <div class="block center_align table">
            <table class="list-coins">
                <tr id="title-table">
                    <th>Название</th>
                    <th>Текущая цена</th>
                    <th>7 дней назад</th>
                    <th>30 дней назад</th>
                </tr>
                @foreach($category->getListCoin->take(5) as $coin)
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
        </div>

        @if ($countCoins <= 5)
            <div id="btn">Ещё</div>
        @endif

    </section>

    <section id="error">
        <div id="close">
            <img src="/image/BurgerCloseButton.svg">
        </div>
        <div class="block">
            Упс! Мы используем бесплатную версию API, поэтому мы имеем ограниченное количество запросов к api, подождите от 1 до 5 минут и попробуйте снова. <br> ДАЙТЕ ДЕНЯГ НА НОРМАЛЬНЫЙ!
        </div>
    </section>

    <script>
        $(function ()
        {
            const url = window.location.href
            const past = url.split('/').pop()

            var num = 5

            $('#btn').bind('click', function (e)
            {
                e.preventDefault()

                $.ajax({
                    url: '{{ route('post.category.pages') }}',
                    type: "POST",
                    data: {
                        segment: past,
                        pageNum: num,
                    },
                    dataType: 'HTML',
                    cache: true,
                    async: true,
                    headers: {
                        'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                    },
                    success: function (result) {
                        if (result) {
                            if (result.button <= 5) {
                                $('#btn').remove();
                            }

                            if (!result.layout) {
                                $("#error").css({
                                    'display': 'flex',
                                })
                            } else {
                                num += 5;
                                $(".table").html(result.layout)
                            }
                        }
                    },
                })
            })
        })
    </script>

    <script>
        $(function ()
        {
            $('#close').bind('click', function (e) {
                $("#error").css({
                    'display': 'none',
                })
            })
        })
    </script>
@endsection
