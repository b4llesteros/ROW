{{-- <!doctype html>
<html lang="es">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" href="images/favicon.ico">

		<title>Room Of Words</title>
		<meta name="description" content="Aprende inglés fácilmente">
        <meta name="keywords" 	 content="Inglés, aprende inglés, videos para aprender inglés, how to learn english, learn english,english school">

        <!-- NORMALIZE CSS -->
        <link href="style/normalize.css" rel="stylesheet">
        <!-- MAIN CSS -->
        <link href="{{mix('front/desktop/css/app.css')}}" rel="stylesheet">
        
    </head> --}}

    {{-- <body>
        <header>

       
            <div class="desktop-one-column mobile-one-column">
                <div class="column">
                    <div class="navbar-right">                  
                            <ul>    
                                <li>
                                    <a href="index.html"><svg class="home-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z" />
                                    </svg></a>
                                </li>                        
                                <li><a href="">Vocabulary</a></li>                            
                                <li><a href="">Grammar</a></li>                            
                                <li><a href="">Writing</a></li>                         
                                <li><a href="">Listening</a></li>                          
                                <li><a href="">Reading</a></li>                            
                                <li><a href="">Products</a></li>                            
                                <li>
                                    <svg class="youtube-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M10,15L15.19,12L10,9V15M21.56,7.17C21.69,7.64 21.78,8.27 21.84,9.07C21.91,9.87 21.94,10.56 21.94,11.16L22,12C22,14.19 21.84,15.8 21.56,16.83C21.31,17.73 20.73,18.31 19.83,18.56C19.36,18.69 18.5,18.78 17.18,18.84C15.88,18.91 14.69,18.94 13.59,18.94L12,19C7.81,19 5.2,18.84 4.17,18.56C3.27,18.31 2.69,17.73 2.44,16.83C2.31,16.36 2.22,15.73 2.16,14.93C2.09,14.13 2.06,13.44 2.06,12.84L2,12C2,9.81 2.16,8.2 2.44,7.17C2.69,6.27 3.27,5.69 4.17,5.44C4.64,5.31 5.5,5.22 6.82,5.16C8.12,5.09 9.31,5.06 10.41,5.06L12,5C16.19,5 18.8,5.16 19.83,5.44C20.73,5.69 21.31,6.27 21.56,7.17Z" />
                                    </svg>
                                </li>
                                <li>
                                    <svg class="instagram-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M7.8,2H16.2C19.4,2 22,4.6 22,7.8V16.2A5.8,5.8 0 0,1 16.2,22H7.8C4.6,22 2,19.4 2,16.2V7.8A5.8,5.8 0 0,1 7.8,2M7.6,4A3.6,3.6 0 0,0 4,7.6V16.4C4,18.39 5.61,20 7.6,20H16.4A3.6,3.6 0 0,0 20,16.4V7.6C20,5.61 18.39,4 16.4,4H7.6M17.25,5.5A1.25,1.25 0 0,1 18.5,6.75A1.25,1.25 0 0,1 17.25,8A1.25,1.25 0 0,1 16,6.75A1.25,1.25 0 0,1 17.25,5.5M12,7A5,5 0 0,1 17,12A5,5 0 0,1 12,17A5,5 0 0,1 7,12A5,5 0 0,1 12,7M12,9A3,3 0 0,0 9,12A3,3 0 0,0 12,15A3,3 0 0,0 15,12A3,3 0 0,0 12,9Z" />
                                    </svg>
                                </li>
                                <li>
                                    <svg class="facebook-icon"viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M12 2.04C6.5 2.04 2 6.53 2 12.06C2 17.06 5.66 21.21 10.44 21.96V14.96H7.9V12.06H10.44V9.85C10.44 7.34 11.93 5.96 14.22 5.96C15.31 5.96 16.45 6.15 16.45 6.15V8.62H15.19C13.95 8.62 13.56 9.39 13.56 10.18V12.06H16.34L15.89 14.96H13.56V21.96A10 10 0 0 0 22 12.06C22 6.53 17.5 2.04 12 2.04Z" />
                                    </svg>
                                </li>
                                <li>
                                    <svg class="twitter-icon" viewBox="0 0 24 24">
                                    <path fill="currentColor" d="M22.46,6C21.69,6.35 20.86,6.58 20,6.69C20.88,6.16 21.56,5.32 21.88,4.31C21.05,4.81 20.13,5.16 19.16,5.36C18.37,4.5 17.26,4 16,4C13.65,4 11.73,5.92 11.73,8.29C11.73,8.63 11.77,8.96 11.84,9.27C8.28,9.09 5.11,7.38 3,4.79C2.63,5.42 2.42,6.16 2.42,6.94C2.42,8.43 3.17,9.75 4.33,10.5C3.62,10.5 2.96,10.3 2.38,10C2.38,10 2.38,10 2.38,10.03C2.38,12.11 3.86,13.85 5.82,14.24C5.46,14.34 5.08,14.39 4.69,14.39C4.42,14.39 4.15,14.36 3.89,14.31C4.43,16 6,17.26 7.89,17.29C6.43,18.45 4.58,19.13 2.56,19.13C2.22,19.13 1.88,19.11 1.54,19.07C3.44,20.29 5.7,21 8.12,21C16,21 20.33,14.46 20.33,8.79C20.33,8.6 20.33,8.42 20.32,8.23C21.16,7.63 21.88,6.87 22.46,6Z" />
                                    </svg>
                                </li>
                            </ul> 
                        </div>  
                    </div>
                </div>    
            </div>              
        </header> --}}

        <main>

            @extends('front.layout.master')  
        
            @section('content')
            <div class="desktop-two-columns-aside mobile-one-column">

                <div class="column-aside">
                    <div class="desktop-one-colum mobile-one-column">
                        <div class="column-categories">
                           <div class="categories-title">
                               <h3>Categories</h3>
                           </div>
                           <div class="category">
                                <h4>Vocabulary</h4>
                           </div>
                           <div class="category">
                               <h4>Grammar</h4>
                            </div>
                            <div class="category">
                                <h4>Writing</h4>
                            </div>
                            <div class="category">
                               <h4>Listening</h4>
                            </div>
                            <div class="category">
                                <h4>Reading</h4>
                             </div>
                        </div>
                    </div>

                </div>

                <div class="column-main">
                    <div class="desktop-one-column mobile-one-column">
                        <div class="header-column-main">
                            <div class="total-products">
                                <h5>Mostrando 9 de 9</h5>
                            </div>
                            <div class="filter-products">
                                <form>
                                    <select name="select">
                                        <option value="value1" selected>Destacados</option>
                                        <option value="value2" >Ofertas</option>
                                        <option value="value3">Precio más bajo</option>
                                        <option value="value3">Precio más alto</option>
                                      </select>
                                </form>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-three-columns mobile-one-column">
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/A1.png">                        
                                </div>
                                <div class="product-title">
                                    <h2>Starter</h2>
                                </div>
                                <div class="product-price">
                                    <h3>50€</h3>
                                </div>
                                <div class="product-button">
                                    <a href="index.html"><button>Ficha</button></a>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/A2.png">  
                                </div>
                                <div class="product-title">
                                    <h2>Elementary</h2>
                                </div>
                                <div class="product-price">
                                    <h3>150€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/B1.png">  
                                </div>
                                <div class="product-title">
                                    <h2>Intermediate</h2>
                                </div>
                                <div class="product-price">
                                    <h3>200€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-three-columns mobile-one-column">
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/B2.png">                        
                                </div>
                                <div class="product-title">
                                    <h2>Upper Intermediate</h2>
                                </div>
                                <div class="product-price">
                                    <h3>300€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/C1.png">  
                                </div>
                                <div class="product-title">
                                    <h2>Expert</h2>
                                </div>
                                <div class="product-price">
                                    <h3>350€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/C2.png">  
                                </div>
                                <div class="product-title">
                                    <h2>Mastery</h2>
                                </div>
                                <div class="product-price">
                                    <h3>400€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                    </div>  
                    
                    
                    <div class="desktop-three-columns mobile-one-column">
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/starterlistening.png">                        
                                </div>
                                <div class="product-title">
                                    <h2>Learn how to listen</h2>
                                </div>
                                <div class="product-price">
                                    <h3>30€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/starterreading.png">  
                                </div>
                                <div class="product-title">
                                    <h2>Learn how to read</h2>
                                </div>
                                <div class="product-price">
                                    <h3>30€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                        <div class="column">
                            <div class="product-card">
                                <div class="product-image">
                                    <img src="images/starterwriting.png">  
                                </div>
                                <div class="product-title">
                                    <h2>Learn how to write</h2>
                                </div>
                                <div class="product-price">
                                    <h3>30€</h3>
                                </div>
                                <div class="product-button">
                                    <button>Ficha</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
            </div>
        </main>
        @endsection        
        {{-- <footer>           
            <div class="desktop-three-columns mobile-three-columns">
                <div class="column">
                    <div class="footer-column-left">
                        <div class="footer-column-left-title">
                            <h2>Contact</h2>
                        </div>
                        <div class="footer-column-left-contact">
                            <ul>
                                <li>Contact Form</li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="column">
                    <div class="footer-column-middle">
                        <div class="footer-column-middle-title">
                            <h2>Information</h2>
                        </div>
                        <div class="footer-column-middle-information">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>
                        </div>
                    </div>                    
                </div>

                <div class="column">
                    <div class="footer-column-right">
                        <div class="footers-column-right-title">
                            <h2>More Options</h2>
                        </div>
                        <div class="footer-columns-right-options">
                            <ul>
                                <li></li>
                                <li></li>
                                <li></li>
                                <li></li>
                            </ul>    
                        </div>
                    </div>                    
                </div>
            </div> 
            
            <div class="desktop-one-column mobile-one-column"> 
                <div class="copyright">
                    <h2>Copyright 2022</h2>
                </div>
            </div>             
        </footer> --}}


                <script src="js/main.js"></script>
                <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
                <script>
                    WebFont.load({
                        google: {
                            families: ['Noto Sans:400', 'Noto Sans:700']
                        }
                    });        
                </script>
    </body>
</html>


