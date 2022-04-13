<!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/favicon.ico">

		<title>Room Of Words</title>
		<meta name="description" content="Aprende inglés fácilmente">
        <meta name="keywords" 	 content="Inglés, aprende inglés, videos para aprender inglés, how to learn english, learn english,english school">

        @include("front.layout.partials.styles")   

    </head>

    <body>            
        @include("front.layout.partials.navbar")      
        
        <main>
            <div class="container">
                @yield("content")
            </div>
        </main>  

        @include("front.layout.partials.footer")     
    </body>

</html>