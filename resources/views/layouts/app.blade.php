<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="description" content="Yuridik.uz - onlayn yuridik konsultatsiya portali. Yuristlar va advokatlar Sizga barcha sohalar bo'yicha onlayn tarzda yuridik xizmatlarni ko'rsatadilar." />
    <meta name="keywords" content="Задать вопрос юристу, Заказать звонок юристу, Yuristga savol, advokat, advokat qidirish, Toshkent advokatlari, huquqshunos, yurist24, yuristlar, Yuridik, yuridik xabarlar, Legal" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="shortcut icon" href="{{ asset('dist/images/favicon.png')}}" type="image/png">
        <title>Юридическая консультация онлайн - бесплатная помощь юристов и адвокатов 24 часа в сутки</title>


    <!-- Styles -->
    <!-- Bootstrap Core -->
    <link href="{{ asset('dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/css/typography.css')}}" rel="stylesheet">
    <link href="{{ asset('dist/css/style.css')}}" rel="stylesheet">
    @yield('styles')
    <link href="{{ asset('dist/fonts/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">



</head>
<body>
<!-- Return to Top -->
<a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- Header -->
{{--<div class="container-fluid my-header color-white dark-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <a href="#" data-toggle="modal" data-target="#beta-version">
                    <i>@lang('app.attention')</i>
                </a>

            </div>
        </div>
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-6">
                <a href="#">
                    <img class="img-responsive" src="{{ asset('dist/images/logo.png')}}" alt="Logo"/>
                </a>
            </div>
            <div class="col-md-10 col-sm-9 col-xs-6 info">
                <span><i class="fa fa-volume-control-phone" aria-hidden="true"></i> (99) 837-37-77 @lang('app.or')</span>
                <a href="#"><img src="{{asset('dist/images/help-icon.png')}}" alt="Help Icon"/></a>
                <button type="button" class="btn-link dropdown-toggle" data-toggle="dropdown">
                    <img src="{{ asset('dist/images/flag-'.\App::getLocale().'.png')}}" alt="Flag"/>
                </button>
                <br/>
                    <a href="{{ route('user.register') }}">@lang('app.registration')</a> | <a href="{{ route('user.login') }}">@lang('app.login')</a>
            </div>
        </div>
        <hr class="header-divider">
    </div>
</div>--}}
<!-- /Header -->

<!-- Navbar -->
<nav class="navbar navbar-default">
    <div class="container dark-blue">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#menu"
                    aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>

    </div>
</nav>
<!-- /Navbar -->
@yield('content')
<!-- /Footer -->
{{--<footer>
    <div class="container-fluid">
       <div class="container">
           <div class="row">
               <div class="col-md-3 col-sm-6 guarantee">
                   <span>@lang('app.qualityguarantee')</span>
                   <p>
                       <img src="{{asset('dist/images/first-place-icon.png')}}" alt="First place icon" />
                       @lang('app.bestlawyers')
                   </p>
                   <p>
                       <img src="{{asset('dist/images/happy-icon.png')}}" alt="Happy icon" />
                       @lang('app.satisfiedclients')
                   </p>
                   <p>
                       <img src="{{asset('dist/images/money-back-icon.png')}}" alt="Money back icon" />
                       @lang('app.moneyback')
                   </p>
                   <p class="text-center"><a href="#">@lang('app.allguarantees')</a></p>
               </div>
               <div class="col-md-3 col-sm-6">
                   <span><a href="#">Yuridik.uz</a></span>
                   <p><a href="#">@lang('app.aboutproject')</a></p>
                   <p><a href="#">@lang('app.aboutus')</a></p>
                   <p><a href="#">@lang('app.contacts')</a></p>
                   <p><a href="#">@lang('app.faqs')</a></p>
                   <p><a href="#">@lang('app.Лицензионное соглашение')</a></p>
                   <p><a href="#">@lang('app.guarantees')</a></p>
                   --}}{{--<p><a href="{{ route('partners') }}">@lang('app.ourpartners')</a></p>--}}{{--
                   --}}{{--<p><a href="{{ route('category.list') }}">@lang('app.categories')</a></p>--}}{{--
                   --}}{{--<p><a href="{{ route('web.blogs') }}">@lang('app.blog')</a></p>--}}{{--
               </div>
               <div class="col-md-3 col-sm-6 hidden-xxs">
                   <span><a href="#">@lang('app.toclients')</a></span>
                   <p><a href="#">@lang('app.askquestion')</a></p>
                   <p><a href="#">@lang('app.ordercall')</a></p>
                   <p><a href="#">@lang('app.orderdocument')</a></p>
                   <p><a href="#">@lang('app.ourlawyers')</a></p>
                   <p><a href="#">@lang('app.questions')</a></p>
                   <p><a href="#">@lang('app.Все специализации')</a></p>
               </div>
               <div class="col-md-3 col-sm-6 hidden-xxs">
                   <span><a href="#">@lang('app.tolawyers')</a></span>
                   <p><a href="#">@lang('app.becomelawyer')</a></p>
                   <span><a href="#">@lang('app.topartners')</a></span>
                   <p><a href="#">@lang('app.toadvertisers')</a></p>
               </div>
           </div>
           <div class="row social-link">
          <span>
            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://www.facebook.com/yuridik"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://t.me/yuridikuz"><i class="fa fa-telegram" aria-hidden="true"></i></a>
          </span>
           </div>
       </div>
    </div>
</footer>--}}
<!-- /Footer -->


<!-- Scripts -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ asset('dist/js/jquery.min.js')}}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- Bootstrap Core JS -->
<script src="{{ asset('dist/js/bootstrap.min.js')}}"></script>




@yield('scripts')
<!-- Custom JS -->
<script src="{{ asset('dist/js/script.js')}}"></script>

</body>
</html>
