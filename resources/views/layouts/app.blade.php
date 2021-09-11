<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- CSRF Token -->
   <meta name="csrf-token" content="{{ csrf_token() }}">

   <title>{{ config('app.name', 'Laravel') }}</title>

   <!-- Scripts -->
   <script src="{{ secure_asset('js/app.js') }}" defer></script>

   <!-- Fonts -->
   <link rel="dns-prefetch" href="//fonts.gstatic.com">
   <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   <!-- Styles -->
   <link href="{{ secure_asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
   <div id="app">
       <nav class="navbar navbar-expand-md navbar-light  shadow-sm" style="background-color:#0092b3; color:#fefefe;">
           <div class="container">
               <a class="navbar-brand" style="color:#fefefe; font-size:1.4em" href="{{ url('/') }}" >
                   {{ config('app.name', 'Laravel') }}
               </a>
               <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                   <span class="navbar-toggler-icon"></span>
               </button>

               <div class="collapse navbar-collapse" id="navbarSupportedContent">
                   <!-- Left Side Of Navbar -->
                   <ul class="navbar-nav mr-auto">

                   </ul>

                   <!-- Right Side Of Navbar -->
                   <ul class="navbar-nav ml-auto" >
                       <!-- Authentication Links -->
                       @guest
                           <li class="nav-item">
                               <a class="nav-link" style="color:#fefefe;"  href="{{ route('login') }}">{{ __('ログイン') }}</a>
                           </li>
                           @if (Route::has('register'))
                               <li class="nav-item">
                                   <a class="nav-link" style="color:#fefefe;"  href="{{ route('register') }}">{{ __('会員登録') }}</a>
                               </li>
                           @endif
                       @else
                           <li class="nav-item dropdown">
                               <a id="navbarDropdown" style="color:#fefefe;" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   {{ Auth::user()->name }} <span class="caret"></span>
                               </a>

                               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                   <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                       {{ __('ログアウト') }}
                                   </a>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                       @csrf
                                   </form>

                                   <a class="dropdown-item" href="{{ url('/mycart') }}">
                                       カートを見る
                                   </a>
                               </div>
                           </li>

                           <a href="{{ url('/mycart') }}" >
                               <img src="{{ asset('img/cart.png') }}" class="cart" >
                           </a>
                       @endguest


                   </ul>
               </div>
           </div>
       </nav>

       <main class="py-4">
           @yield('content')
       </main>

       <footer class="footer_design">

        @guest
            <p class="nav-item" style="display:inline;">
                <a href="{{ route('login') }}" class="nav-link" style="color:#fefefe; display:inline;">{{ __('ログイン') }}</a>

            @if (Route::has('resister'))
                    <a href="{{ route('resister') }}" class="nav-link" tyle="color:#fefefe; display:inline;">{{ __('会員登録')}}</a>
                </p>
            @endif

        @endguest
        
        <div style="margin-top:24px;">
            なんでも売ります<br>
            <p style="font-size:2.4em">ショッピングサイト🍐</p><br>
            </div>
     
            <p style="font-size:0.7em;">@copyright @mukae9 @funa074</p>     
       </footer>
   </div>
</body>
</html>