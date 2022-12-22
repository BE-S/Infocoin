@extends('layouts.tamplate')

@section('content')
    <script>
        alert('Сайт нестабилен, так как находится в бета-тестировании. Приносим наши извинения.')
    </script>


    <div class="line"></div>

    <section id="one">
        <div class="block left">
            <div class="title">Что такое криптовалюта</div>
            <div>
                Это форма виртуальной валюты, позволяющая осуществлять перевод денег или вы можете заработать на её спекуляции.
                В отличие от фиатных валют, таких как доллар США или евро, нет централизованного органа, который поддерживает
                или влияет на стоимость криптовалюты.
            </div>
        </div>
        <div class="image" style="width: 70%">
            <img id="bitcoin" src="/public/image/banners/Bitcoin.png">
        </div>
    </section>

    <div class="line"></div>

    <section id="two">
        <div class="image">
            <img id="what-is" src="/public/image/banners/what-is.png">
        </div>
        <div class="block right">
            <div class="title">От куда берётся криптовалюта</div>
            <div>
                Криптовалюта формируется в процессе математических вычислений
                компьютера или же вы можете покупать её на свой кошелёк.
            </div>
        </div>
    </section>

    <div class="line"></div>

    <section class="column" id="three">
        <div class="block center_text">
            <div class="title">Какую криптовалюту покупать</div>
            <div>
                Всё зависит от ваших потребностей.
            </div>
        </div>
        <div class="banners">
            <div id="head">
                <div class="bg" id="anonymous">
                    <a class="blackout" href="{{route('get.category.name', 'anonymous')}}">
                        <h4 class="block">Анонимные</h4>
                    </a>
                </div>
            </div>

            <div id="bottom">
                <div class="bg" id="fiat">
                    <a class="blackout" href="{{route('get.category.name', 'fiat')}}">
                        <h4 class="block">Фиатные</h4>
                    </a>
                </div>

                <div class="bg" id="stable">
                    <a class="blackout" href="{{route('get.category.name', 'stable')}}">
                        <h4 class="block">Стабильные</h4>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <div class="line"></div>

    <section class="column" id="four">
        <div class="block center_text">
            <div class="title">С чего начать.</div>
            <div>
                В начале вашего пути к крипто-олегархии предстоит завести криптовалютный кошелёк.
            </div>
        </div>
    </section>

    <div class="line"></div>

    <section class="column" id="five">
        <div class="block">
            <div class="title center_text">Какие криптокошельки бывают</div>
                <div class="wallet">
                    <div class="center_align">
                        <div class="block left">
                            <div class="text">
                                Холодные кошельки - это хранилище для криптовалюты, которое не подключено к интернету.
                                Иными словами, все необходимые для доступа к биткоинам данные неуязвимы для хакеров.
                                Именно поэтому холодные кошельки называют самым безопасным способом хранения криптовалют.
                            </div>
                            <div class="text">
                                Холодные кошельки бывают в виде аппаратных устройств и в виде обычной бумажки.
                                Аппаратный криптокошелёк надёжен за счёт наличия шифрования данных на нём.
                                Бумажный кошелёк представляет собой обычную бумагу на которую нанесены данные приватного ключа и секретной фразы для его восстановления.
                            </div>
                            <div class="text">
                                Холодные кошельки подходят для долговремменного хранения криптовалют
                                из-за невозможности быстрого перевода средств из холодного кошелька в горячий.
                            </div>
                        </div>
                        <div class="image">
                            <img id="banner" src="/public/image/banners/cold wallet.png">
                        </div>
                    </div>

                    <div class="center_align" style="margin-top: 5vh">
                        <div class="image">
                            <img id="banner" src="/public/image/banners/hot wallet.png">
                        </div>
                        <div class="block right">
                            <div class="text">
                                Горячие кошельки — это хранилища для биткоинов, приватный ключ которых находится либо в интернете,
                                либо на устройствах, подключенных к нему. Клиентам предоставляется горячий кошелек,
                                который надежно защищен компанией. Также горячими кошельками называют приложения для компьютеров и смартфонов.
                            </div>
                            <div class="text">
                                Этот вид кошельков подходит для быстрых и срочных переводов.
                            </div>
                        </div>
                    </div>
                </div>
                </div>
        </div>
    </section>

    <div class="line"></div>

    <section class="column" style="margin-left: 0; margin-right: 0;" id="six">
        <div class="block">
            <div class="title center_text">Где купить криптовалюты</div>
            <div class="row">
                <div class="card">
                    <div>
                        <img src="/public/image/banners/exchange.png">
                    </div>
                    <div class="text">
                        <div>
                            Централизованные биржи являются одним из самых популярных вариантов покупки криптовалюты за фиатные деньги.
                            Популярные сервисы предоставляют свои услуги всем лицам, кроме тех, кто попал в санкционные списки.
                            Главным условием биржи является прохождение процедуры регистрации KYC (know your customer).
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <img src="/public/image/banners/hand to hand.png">
                    </div>
                    <div class="text">
                        <div>
                            Еще один способ получить цифровые активы — приобрести их в обменнике. Для этого необходимо подготовить криптокошелек,
                            на который обменник отправит криптовалюту в процессе сделки.
                            При использовании обменника не требуется проходить регистрацию и подтверждать личность.
                            Обменники работают как с наличными, так и с безналичными формами оплаты.
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <img src="/public/image/banners/bot.png">
                    </div>
                    <div class="text">
                        <div>
                            На основе Telegram построено множество площадок и ботов (автоматизированных сервисов) для сделок с криптовалютой.
                            Недостатком данного способа приобретения криптовалюты является высокий риск столкновения с мошенниками,
                            а также ограниченный выбор криптовалют.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
