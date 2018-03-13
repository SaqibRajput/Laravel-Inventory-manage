<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'iframeits') }}</title>

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
     <!--<script src="{{ asset('js/angular.js') }}"></script>-->
   
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

    				<!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li><a href="/"><img src="{{URL::asset('/img/IFrameLogo.png')}}" alt="Iframeits" height="50"></a></li>
                    </ul>
                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    
                    

                    <!-- Branding Image -->
                    <!--<a class="navbar-brand" href="{{ url('/home') }}">
                        {{ config('app.name', 'iframeits') }}
                    </a>-->
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                

                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (isset($pages['menuDB']))
                             @foreach($pages['menuDB'] as $key => $value)
                                <li><a href="{{ URL::to($pages['menuDB'][$key]->url)}}">{{ucfirst($pages['menuDB'][$key]->page_title)}}</a></li>
                        	 @endforeach
                      @endif
                      
                       <li><a href="/inventory">Angular Inventory</a></li>
                        
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                         
                    </ul>
                </div>
            </div>
        </nav>

        @yield('content')
    </div>
    
<div class="footer">
	<p>Copyright ©2018 Iframeits</p>
</div>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    
    @yield('js')
    
    @yield('footer')
</body>
</html>
