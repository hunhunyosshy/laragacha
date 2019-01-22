<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Gacha Simulation</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 50vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 60px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 40px;
            }

            .font-20 {
                font-size:20px;
            }

            .font-40 {
                font-size:40px;
            }

            .select-box select {
                font-size:26px;
                border:1px;
                width:100px;
                display: inline;
            }

            .square_btn{
                display: inline-block;
                padding: 0.5em 1em;
                text-decoration: none;
                background: #668ad8;
                color: #FFF;
                border-bottom: solid 4px #627295;
                border-radius: 3px;
                width:120px;
                height:50px;
            }

            .square_btn:active {
                -ms-transform: translateY(4px);
                -webkit-transform: translateY(4px);
                transform: translateY(4px);
                border-bottom: none;
                width:120px;
                height:50px;
            }
        </style>
        <link rel="shortcut icon" href="{{ asset('gacha.ico') }}" >
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