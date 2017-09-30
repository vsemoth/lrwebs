<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>LRWebs</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <link href="{{asset('css/app.css')}}" rel="stylesheet" type="text/css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="css/bootstrap-3/css/bootstrap.min.css" type="text/css" rel="stylesheet">


        <!-- Styles -->
        <style>
            html, body {
                background-color: #ecc;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            ul {
                list-style-type: disc;
                margin-left: 20px;
                font-weight: 5px;
            }

            #app {
                background-color: #ece;
            }

            .title h1 {
                color:transparent;
            }

            .full-height {
                height: 100vh;
                background-color: #eee;
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
                background-repeat: no-repeat;
                background-image: url('images/LOGO.bmp');
                margin-bottom: 30px;
            }
            .dark {
                color: #000;
                font-weight: bolder;
            }

            .wrapper {
                position: absolute;
            }

            .lead {
                border-radius: 30%;
                position: relative;
                background: #fec001;
                text-shadow: 1px 1px 3px #fff;
                width: 60%;
                display: block;
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .pointer {
                margin-top: 50px;
            }

            .banner {
                border: 3px solid #222;
                min-height: 120px;
                margin: 50px 30px 80px 30px;
                background-color: red;
            }

            .banner h3 {
                text-shadow: 1px 1px 2px #fff;
            }

            .col-md-6 {
                background-color: #eec;
            }
        </style>
    </head>
    <body>
          <a class="nav-item is-paddingless nav-left pull-left" href="{{route('home')}}">
            <img src="{{asset('images/LOGO.bmp')}}" alt="LRWebs logo">
          </a>
        <div class="flex-center position-ref full-height" id="app">
            @if (Route::has('login'))
                <div class="nav-item is-paddingless nav-left pull-left top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href"{{ url('/about') }}">About us</a>
                        <a href"{{ url('/contact') }}">Contact us</a>
                        <a href="{{ url('/login') }}">Login</a>
                        <a class="btn btn-primary btn-danger" style="text-shadow:1px 1px 1px #555;color:#eee;" href="{{ url('/register') }}">Join the Community</a>
                    @endif
                </div>
            @endif

            <div class="content col-md-12">
                <div class="col-md-3">
                    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                    <script>
                      (adsbygoogle = window.adsbygoogle || []).push({
                        google_ad_client: "ca-pub-8050220120011899",
                        enable_page_level_ads: true
                      });
                    </script>
                </div>
                <div class="title m-b-md col-md-9">
                    <h1>|</h1>
                </div>
            </div>
        </div>

                <div class="row col-md-12 col-md-offset-2">
                    <div class="col-md-offset-2 wrapper">
                        <div class="col-md-3 banner">
                            <strong>
                                <h3 class="dark">First three customers will have their whole web setup for free!</h3>
                            </strong>
                        </div>
                        <div clas="col-md-3 pointer">
                          <a class="nav-item is-paddingless nav-left pull-left" href="{{route('register')}}">
                            <img src="{{asset('images/pointer.bmp')}}" alt="LRWebs logo">
                          </a>
                        </div>
                       <a class="btn btn-danger" href="{{route('register')}}"> Join the Community
                        <div class="col-md-3 banner lead">
                          <a class="nav-item is-paddingless nav-left pull-left" href="{{route('register')}}">
                            <img src="{{asset('images/imge.bmp')}}" alt="LRWebs logo">
                          </a>

                            <strong>
                                <h2><b><a class="pull-left" href="{{route('register')}}">SIGN UP NOW!</a></b></h2>
                            </strong>
                        </div>
                        </a>
                    </div>
                </div>

                <hr style="margin-bottom:240px;">
            <div class="row position-ref">
                <div class="col-md-12 col-md-offset-2 dark">
                    <div class="col-md-6 col-md-offset-1">
                <article>
            <ul>
                <h3>
                    So, why get a website?
                </h3>
                <li>
                    Reach a broader audience
                </li>
                <li>
                    Increase credibility
                </li>
                <li>
                    Online advertising space
                </li>
                <li>
                    Keep your clients updated
                </li>
                <li>
                    Sell online
                </li>
            </ul>
                    <blockquote>
                        <p>
                            <h4>Are you an entrepreneur?</h4>
                        </p>
                    </blockquote>
                <h4>Would you like your own marketing space?</h4>
                <h4>Do you need a website?</h4>

                <br>

                <p>
                    If you answered yes to any of the questions above then look no further, You've come to the right place.
                    If you are a start-up business and you can't afford a monthly fee to pay for a domain name, we can offer you one for free!
                    We can also afford you up to two months of VPS (virtual Private Server) hosting on an online Ubuntu server.
                </p>
                <h5>
                    We can guarantee you 100% uptime, meaning that your business will always be online, absolutely 0% downtime.
                    Monetise your website, we will also throw in advertising spaces on the landing page and homepage to begin with. Added to
                    all of that, up to three months of technical support after the website has been deployed.
                </h5>
                </article>
                </div>
                    <a href="{{route('register')}}" class="btn-default">
                        <div class="col-md-3 banner lead col-md-offset-2">
                          <a class="nav-item is-paddingless nav-left pull-left" href="{{route('register')}}">
                            <img src="{{asset('images/imge.bmp')}}" alt="LRWebs logo">
                          </a>

                            <strong>
                                <h2><b><a class="pull-left" href="{{route('register')}}">SIGN UP NOW!</a></b></h2>
                            </strong>
                        </div>
                    </a>
            </div>
        </div>

        <script src="{{asset('js/app.js')}}" type="text/javascript"></script>
    </body>
</html>
