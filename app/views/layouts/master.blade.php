<!DOCTYPE html>
<html>
<head>
    <title>Laravel Authentication Denemesi!!</title>
    <meta charset="utf-8">
</head>

<body>
    <div id="container">
        <div id="nav">
            <ul>
                <li><a href="/">Main Page</a><li>
                @if (Auth::check())
                    <li><a href="profile">Special For You</a></li>
                    <li><a href="logout">Logout</a></li>
                @else
                   <li><a href="login">Login</a></li>
                @endif
            </ul>
        </div><!-- end nav -->

        <!-- Check for flash notification message -->
        @if (Session::has('flash_notice'))
            <div id="flash_notice">{{ Session::get('flash_notice') }}</div>
        @endif
        
        @yield('content')
    </div><!-- end container -->
</body>
</html>

