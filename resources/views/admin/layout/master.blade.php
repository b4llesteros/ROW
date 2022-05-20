<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="-">

	

    
        @include("admin.layout.partials.styles")   

    </head>

    <body>            
        @include("admin.layout.partials.navbar")
        @include("admin.components.notification")  
        
        <main>
            <div class="container">
                @yield("content")
            </div>
        </main>  

        @include("admin.layout.partials.scripts")
        
    </body>

        

</html>