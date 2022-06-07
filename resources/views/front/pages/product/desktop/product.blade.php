@extends('front.layout.master')   

@section('content')

        <main>
            <div class="desktop-two-columns mobile-one-column mobile-one-main-column">
                <div class="column left-column">
                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-image">
                                <img src="" alt="">
                            </div>
                        </div>    
                    </div>
                    <div class="desktop-five-columns mobile-four-columns">
                        <div class="column">
                            <div class="product-image-little">
                                <img src="" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="" alt="">
                            </div>                            
                        </div> 
                    </div>                
                </div>

                <div class="column right-column">
                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-title">
                                <h1>{{$product->title}}</h1>
                            </div>                            
                        </div>
                    </div>

                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-price">
                                <h2>{{$product->price}}</h2>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-description">
                                <h3>{{$product->description}}</h3>
                            </div>
                        </div>
                    </div>

                    @include('front.components.desktop.plusminusbutton')

                    @include('front.components.desktop.tabs')

                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="desktop-two-columns mobile-one-column mobile-one-column-buttons">
                                <div class="column">
                                    <div class="add-button">
                                        <button>Añadir a la cesta</button>
                                    </div>
                                </div>  
                                <div class="column">  
                                    <div class="buy-button">
                                        <button>Comprar</button>
                                    </div>
                                </div> 
                            </div>
                        </div>                    
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="add-button-notification">
                                <div class="add-button-notification-svg">
                                    <svg viewBox="0 0 24 24">
                                        <path d="M9 20C9 21.11 8.11 22 7 22S5 21.11 5 20 5.9 18 7 18 9 18.9 9 20M17 18C15.9 18 15 18.9 15 20S15.9 22 17 22 19 21.11 19 20 18.11 18 17 18M7.17 14.75L7.2 14.63L8.1 13H15.55C16.3 13 16.96 12.59 17.3 11.97L21.16 4.96L19.42 4H19.41L18.31 6L15.55 11H8.53L8.4 10.73L6.16 6L5.21 4L4.27 2H1V4H3L6.6 11.59L5.25 14.04C5.09 14.32 5 14.65 5 15C5 16.11 5.9 17 7 17H19V15H7.42C7.29 15 7.17 14.89 7.17 14.75M18 2.76L16.59 1.34L11.75 6.18L9.16 3.59L7.75 5L11.75 9L18 2.76Z" />
                                    </svg>
                                </div>
                                <div class="add-button-notification-title">
                                    <span>Añadido a la cesta</span>
                                </div>                                
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>         
        </main>
        
@endsection