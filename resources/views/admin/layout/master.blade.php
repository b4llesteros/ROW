<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="-">
        {{-- csrf_token es un identificador para garantizar la seguridad,
             genera un identificador de sesión  --}}
             {{-- En las restAPI se utiliza un API Token se usa un OAuth 2.0 --}}
        <meta name="csrf-token" content="{{ csrf_token()}}">

        @include("admin.layout.partials.styles")   

    </head>

    <body>            
        @include("admin.layout.partials.navbar")
        @include("admin.components.notification")  
        @include('admin.components.modal_delete')

        <main>
            <div class="container">
                @yield("content")
            </div>
        </main>  

        @include("admin.layout.partials.scripts")
        
    </body>

</html>