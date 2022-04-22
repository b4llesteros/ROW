{{-- <!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="-">

		<title></title>
		<meta name="description" content="-">
        <meta name="keywords" 	 content="-">

        <!-- NORMALIZE CSS -->
        <link href="style/normalize.css" rel="stylesheet">
        <!-- MAIN CSS -->
        <link href="{{mix('admin/desktop/css/app.css')}}" rel="stylesheet">
        
    </head> --}}

    <body>
        
        {{-- <header>
            <div class="desktop-one-column mobile-one-column">
                <div class="column">
                    <div class="panel-title">
                        <h1>Usuarios</h1>
                    </div>
                </div>
                <div class="hamburger">  
                    <span class="bar1"></span>  
                    <span class="bar2"></span>  
                    <span class="bar3"></span>  
                </div>
            </div>
        </header> --}}


@extends('admin.layout.master')   

@section('content')            
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Dirección</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>usuario 1</td>
                        <td>Teléfono 1</td>
                        <td>Dirección 1</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button ">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>usuario 2</td>
                        <td>Teléfono 2</td>
                        <td>Dirección 2</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button">
                                    <svg viewBox="0 0 24 24">
                                        <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>usuario 3</td>
                        <td>Teléfono 3</td>
                        <td>Dirección 3</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>usuario 4</td>
                        <td>Teléfono 4</td>
                        <td>Dirección 4</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>usuario 5</td>
                        <td>Teléfono 5</td>
                        <td>Dirección 5</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>6</td>
                        <td>usuario 6</td>
                        <td>Teléfono 6</td>
                        <td>Dirección 6</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.53,2 22,6.47 22,12C22,17.53 17.53,22 12,22C6.47,22 2,17.53 2,12C2,6.47 6.47,2 12,2M17,7H14.5L13.5,6H10.5L9.5,7H7V9H17V7M9,18H15A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M9.75 20.85C11.53 20.15 11.14 18.22 10.24 17C9.35 15.75 8.12 14.89 6.88 14.06C6 13.5 5.19 12.8 4.54 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 5.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.05 12.96L10.06 11.26C8.5 10.23 6.5 9.32 4.64 9.05C3.58 8.89 2.46 9.11 2.1 10.26C1.78 11.25 2.29 12.25 2.87 13.03C4.24 14.86 6.37 15.74 7.96 17.32C8.3 17.65 8.71 18.04 8.91 18.5C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 5.81 18 4.8 17.36L3.79 19.06C5.32 20 7.88 21.47 9.75 20.85M18.96 7.33L13.29 13H11V10.71L16.67 5.03L18.96 7.33M22.36 6.55C22.35 6.85 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.54L20.34 5.95L19.67 6.62L17.38 4.33L19.53 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 5.08C21.39 5.28 21.59 5.5 21.79 5.67C22.08 5.97 22.37 6.25 22.36 6.55Z" />
                                    </svg>
                                </div>
                            </div>
                        </td>
                    </tr>     
                </table>               
            </div>

            <div class="menu">
                <ul>
                    <li>Users</li>
                    <li>Products</li>
                    <li>Grammar Posts</li>
                    <li>Listenning Posts</li>
                    <li>Writing Posts</li>
                    <li>Reading Posts</li>
                    <li>Contact</li>                    
                </ul>                    
            </div>      
                              

            <div class="form">
                <form>
                    <div class="form-label">
                        <div class="name-label">
                            <label for="">Nombre</label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-telephone">
                        <div class="name-label">
                            <label for="">Teléfono</label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-email">
                        <div class="name-label">
                            <label for="">Email</label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>                           
                    <div class="form-adress">
                        <div class="name-label">
                            <label for="">Dirección</label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-zipcode">
                        <div class="name-label">
                            <label for="">Código Postal</label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                    <div class="form-idcard">
                        <div class="name-label">
                            <label for="">DNI</label>
                        </div>
                        <div class="form-input">
                            <input type="text" class="form-control" id="">
                        </div>
                    </div>
                </form>
            </div>   
@endsection            


            <!-- <div class="desktop-one-column mobile-one-column">
                <div class="editbuttons">
                    <div class="edit-button">
                        <button type="button">Guardar</button>
                    </div>
                    <div class="edit-button">
                        <button type="button">Cancelar</button>
                    </div>
                    <div class="edit-button">
                        <button type="button">Crear Usuario</button>
                    </div>
                </div>  
            </div> -->
        </main>

        <footer>

        </footer>



    </body>

    

</html>