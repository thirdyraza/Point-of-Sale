<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-image: url('/images/welcome-bg2.png');
                background-size: cover;
                color: #d0bdad;
                font-family: 'Righteous', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                display: flex;
                align-items: center;                
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                top: 18px;                
                right: 10px;
                position: absolute;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 90px;
                text-shadow: 3px 3px #8e6b92;
            }
            .greet {
                font-size: 20px;
                letter-spacing: 8px;
                text-shadow: 2px 2px #8e6b92;
            }

            .links > a {
                color: #d0bdad;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Store</a>
                    @else
                        <a href="{{ url('/home') }}">Store</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    Shopkeeper`s Inn
                </div>

                <div class="greet">
                    <h3>WELCOME TRAVELER !</h3>
                </div>
            </div>
        </div>
    </body>
</html>
