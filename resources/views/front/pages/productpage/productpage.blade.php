@extends('front.layout.master')   

@section('content')

        <main>
            <div class="desktop-two-columns mobile-one-column mobile-one-main-column">
                <div class="column left-column">
                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-image">
                                <img src="{{Storage::url('C2.png')}}" alt="">
                            </div>
                        </div>    
                    </div>
                    <div class="desktop-five-columns mobile-one-column">
                        <div class="column">
                            <div class="product-image-little">
                                <img src="{{Storage::url('C2.png')}}" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="{{Storage::url('C2.png')}}" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="{{Storage::url('C2.png')}}" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="{{Storage::url('C2.png')}}" alt="">
                            </div>                            
                        </div> 
                        <div class="column">
                            <div class="product-image-little">
                                <img src="{{Storage::url('C2.png')}}" alt="">
                            </div>                            
                        </div> 
                    </div>                
                </div>

                <div class="column right-column">
                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-title">
                                <h1>Starter Level</h1>
                            </div>                            
                        </div>
                    </div>

                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-price">
                                <h2>50€</h2>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="product-description">
                                <h3>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic</h3>
                            </div>
                        </div>
                    </div>

                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="column-quantity">
                                <div class="quantity-title">
                                    <h4>Cantidad</h4>
                                </div>
                                
                                    <div class="quantity-form-button">
                                        <button id="minus"><span>-</span></button>
                                    </div>
                                    <div class="quantity-input">
                                        <input id="counter" type="text" value="1" data-min="0" disabled="disabled">
                                    </div>
                                    <div class="quantity-form-button">
                                        <button id="plus"><span>+</span></button>
                                    </div>
                                
                            </div>    
                        </div>
                    </div>

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
                </div>
            </div>         
        </main>
        
@endsection