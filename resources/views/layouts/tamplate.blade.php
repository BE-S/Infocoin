<!DOCTYPE HTML>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Infocoin</title>
    <meta name="description" content="Infocoin" />

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="/public/css/client/main.css">
    <link rel="stylesheet" href="/public/css/client/main_mobile.css">
    <link rel="stylesheet" type="text/css" href="/assets/css/style.css" />
    <link rel="icon" href="/public/image/logo.png">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400&display=swap" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
</head>

<body>
<header>
    <div id="logo">
        <a href="{{ route('get.home') }}">
            <img src="/public/image/logo.png">
            <span>Infocoin</span>
        </a>
    </div>
</header>
<main>
    @yield('content')
</main>

</body>
</html>
