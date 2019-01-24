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
        <form method="POST" action="/gacha/result/">
            {{ csrf_field() }}
            <div class="flex-center position-ref full-height">
                <div class="content">
                    <div class="title m-b-md">
                        ガチャシミュレーション
                    </div>
                    <div class="font-20 select-box m-b-md">
                            <select name="count">
                                <option value=1>1</option>
                                <option value=2>2</option>
                                <option value=3>3</option>
                                <option value=4>4</option>
                                <option value=5>5</option>
                                <option value=6>6</option>
                                <option value=7>7</option>
                                <option value=8>8</option>
                                <option value=9>9</option>
                                <option value=10>10</option>
                            </select>  &nbsp;&nbsp;回引く
                    </div>
                    <button type='submit' name='action' value='send' class="square_btn">ガチャを引く</button>
                </div>
            </div>
        </form>
    </body>
</html>
