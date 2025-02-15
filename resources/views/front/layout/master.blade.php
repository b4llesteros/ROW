<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		{{-- <link rel="shortcut icon" href="images/favicon.ico"> --}}

		<title>@yield('title')</title>
        <meta name="csrf-token" content="{{ csrf_token()}}">
		<meta name="description" content=@yield('description')>
        <meta name="keywords" 	 content=@yield('keywords')>
    
        @include("front.layout.partials.styles")      
    </head>

    <body>            
        @include("front.layout.partials.navbar")      
        
        <main id="main">
            <div class="container">
                @yield("content")
            </div>
        </main>  

        @include("front.layout.partials.footer")    
        @include("front.layout.partials.scripts")  

    </body>

</html>