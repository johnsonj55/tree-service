<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
<header>
        <div id="logo">
            <h1>Paul Heyman's Tree Service</h1>
            <p>For all your tree care needs!</p>
        </div>
        <nav>
            <ul>
                <li><a href="{{ route('home') }}">Home</a></li>
                <li><a href="service.html">Services</a></li>
                <li><a href="OurWork.html">Our Work</a></li>
                <li><a href="contactus.html">Contact Us</a></li>
                <li><strong><a href="tel:+1-941-746-7100">+1 (941) 746-7100</a>
                </strong></li>
            </ul>
        </nav>
    </header>
 
            @yield('content') 
            <footer>
            @guest
            <!-- Display the "Admin Login" link for guests (not logged in users) -->
            <a href="{{ route('login') }}" class="admin-login-button">Admin Login</a> 
        @else
            <!-- Display the "Logout" link for authenticated users -->
            <a href="{{ route('logout') }}" class="admin-login-button" 
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
            <br> 
            @auth
            @if(auth()->user()->isAdmin())
            <br>
                <!-- Display the button or link for admins -->
                <a href="{{ route('admin.index') }}" class="admin-button">Admin Dashboard</a>
                <br>
            @endif
        @endauth

        <p>&copy; Copyright paulheymanstreeservice.com 2023, All rights reserved. <b>Bradenton License #CLTR 317735 - Sarasota #201110150</b></p>
         
    </footer>
</body>
</html>
