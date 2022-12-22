@extends('layouts.tamplate')

@section('content')

    <div class="line"></div>

    <section id="nine">
        <div class="image" id="description">
            <img src="{{$coinData->getImage($coin->name, 'large')}}">
            <div class="title-mobile">
                {{ucwords(strtolower($coin->name))}}
            </div>
            <div class="price">
                {{ number_format($historicalPrice['to_day']['market_data']['current_price']['rub'], 2, ',', ' ') . ' ' . 'руб.' }}
            </div>
        </div>
        <div class="block left">
            <div class="title">{{ucwords(strtolower($coin->name))}}</div>
            <div>
                {{$coin->description}}
            </div>
        </div>

    </section>

    <section id="error">
        <div class="block">
            Упс! Мы используем бесплатную версию API, подождите от 1 до 5 минут. <br> ДАЙТЕ ДЕНЯГ НА НОРМАЛЬНЫЙ!
        </div>
    </section>

    <section style="margin-top: 0;" id="ten">
        <div class="block center_align table">
            <table class="list-coins" id="pc">
                <tr id="title-table">
                    <th style="font-size: 1vw;">24 часа</th>
                    <th style="font-size: 1vw;">1 неделя</th>
                    <th style="font-size: 1vw;">2 недели</th>
                    <th style="font-size: 1vw;">1 месяца</th>
                    <th style="font-size: 1vw;">2 месяца</th>
                    <th style="font-size: 1vw;">1 год</th>
                </tr>
                <tr style="text-align: center; font-size: 1vw">
                    @foreach($marketData as $data)
                        <td>
                            {{number_format($data, 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                        </td>
                    @endforeach
                </tr>
            </table>

            <table class="list-coins" id="mobile">
                <tr id="title-table">
                    <th>24 часа</th>
                    <td></td>
                    <th>1 неделя</th>
                </tr>
                <tr>
                    <td>
                        {{number_format($marketData['one_day'], 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                    </td>
                    <td></td>
                    <td>
                        {{number_format($marketData['one_week'], 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                    </td>
                </tr>

                <tr id="title-table">
                    <th >2 недели</th>
                    <td></td>
                    <th>1 месяца</th>
                </tr>
                <tr>
                    <td>
                        {{number_format($marketData['two_week'], 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                    </td>
                    <td></td>
                    <td>
                        {{number_format($marketData['one_mouth'], 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                    </td>
                </tr>

                <tr id="title-table">
                    <th>2 месяца</th>
                    <td></td>
                    <th>1 год</th>
                </tr>
                <tr>
                    <td>
                        {{number_format($marketData['two_mouth'], 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                    </td>
                    <td></td>
                    <td>
                        {{number_format($marketData['one_year'], 2, ',', ' ') . ' ' . ' ' . 'руб.'}}
                    </td>
                </tr>
            </table>
        </div>
    </section>

@endsection
