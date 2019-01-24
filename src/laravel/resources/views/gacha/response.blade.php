<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gacha Simulation</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="shortcut icon" href="{{ asset('gacha.ico') }}" >
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/gacha/index.css') }}" type="text/css">
    </head>
    <body>
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        ガチャシミュレーション
                    </div>
                    <div class="font-20 m-b-md">
                        SSR {{ $SSR }} 回 SR {{ $SR }}回 R {{ $R }}回
                    </div>
                    <a href="/gacha/"><button class="square_btn">戻る</button></a>
                </div>
            </div>
    </body>
</html>