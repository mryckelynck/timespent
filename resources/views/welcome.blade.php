<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.min.css" media="all"/>
        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
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
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .color-white{
                text-color:white:
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    TIMESPENT
                </div>

                <!-- <div class="links"> -->
                  <div class="row">
                    <div class="btn btn-success col-sm-6" ><a class="color-white" href="https://laravel.com/docs">ARRIVEE</a></div>
                    <div class="btn btn-primary col-sm-6" ><a class="color-white" href="https://laravel.com/docs">DEPART</a></div>
                  </div>
                  <div class="row">
                    <div class="btn btn-success col-sm-6" style="margin-top:10px"><a class="color-white" href="https://laravel.com/docs">PAUSE</a></div>
                    <div class="btn btn-primary col-sm-6" style="margin-top:10px"><a href="https://laravel.com/docs">FIN</a></div>
                  </div>
                  <div class="row">
                    <div class="btn btn-warning col-sm-12" style="margin-top:10px"><a href="https://laravel.com/docs">INFOS</a></div>
                  </div>
                </div>
            <!-- </div> -->
        </div>
    </body>
</html>
