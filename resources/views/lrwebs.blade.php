@extends('layouts.master')

@section('title', ' | LRWebs')

@section('styles')
    <!-- Styles -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
@stop

@section('content')

    <div class="full-height container" style="width:100%">
      <img src="{{ asset('images/webCard/slide1.JPG') }}">
    </div>

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
</div>

<div class="container title position-ref">

      <div class="row">
        <div class="col-md-offset-2">
        <div class="col-md-4">
          <img class="img" src="{{asset('images/mc-mickey1.jpg')}}">
        </div>
        <div class="col-md-4">
          <img class="img" src="{{asset('images/mc-mickey2.jpg')}}">
        </div>
      </div>
    </div>
</div>


    <hr style="margin-bottom:40px;">

    
    <div class="container">
      <div class="col-md-12 col-md-offset-1">

        <div class="row">
        <div class="col-md-9">
          <article>
            
            <ul>
                <blockquote>
                  <h2>
                      So, why get a website?
                  </h2>
                      <br>
                </blockquote>
                <li> Reach a broader audience </li>
                <li> Increase credibility </li>
                <li> Online advertising space </li>
                <li> Keep your clients updated </li>
                <li> Sell online </li>
            </ul>
                    <br>
                    <br>

              <blockquote>
                <h4>Are you an entrepreneur?</h4>
              </blockquote>
                <h4>Would you like your own marketing space?</h4>
                <h4>Do you need a website?</h4>
                  <br>

            <p>
                If you answered yes to any of the questions above then look no further, You've come to the right place.
                If you are a start-up business and you can't afford a monthly fee to pay for a domain name, we can offer you one for free!
                We can also afford you up to two months of VPS (virtual Private Server) hosting on an online Ubuntu server.
            </p>
            <br>
            <h5>
                We can guarantee you 100% uptime, meaning that your business will always be online, absolutely 0% downtime.
                Monetise your website, we will also throw in advertising spaces on the landing page and homepage to begin with. Added to
                all of that, up to three months of technical support after the website has been deployed.
            </h5>
          </article>
        </div>

      </div>
    </div>
<hr>
  <div class="col-md-offset-2"
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


@endsection