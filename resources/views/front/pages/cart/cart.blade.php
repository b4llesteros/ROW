


    @extends('front.layout.master')   

    @section('content')

            <div class="desktop-one-column mobile-one-colum">
                <div class="column">
                    <div class="cart-title">
                        <h2>Cesta</h2>
                    </div>
                </div>
            </div>

            <div class="desktop-one-column mobile-one-column">
                <div class="column">
                    <div class="table-cart">
                        <table>
                            <tr class="main-row">
                                <th class="product-column"><h2>Producto/s</h2></th>
                                <th class="quantity-column"><h2>Cantidad</h2></th>
                                <th class="unit-price-column"><h2>Precio Unidad</h2></th>
                                <th class="total-price-column"><h2>Precio total</h2></th>
                            </tr>
                            <tr class="product-row">
                                <th class="product-column">English for Dummies</th>
                                <th class="quantity-column">
                                    <div class="quantity-counter">
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
                                    
                                </th>
                                <th class="unit-price-column">50€</th>
                                <th class="total-price-column">50€</th>
                            </tr> 
                            <tr class="product-row">
                                <th class="product-column">English for Dummies</th>
                                <th class="quantity-column">
                                    <div class="quantity-counter">
                                        <div class="quantity-form-button">
                                            <button id="minus" class="minus"><span>-</span></button>
                                        </div>
                                        <div class="quantity-input">
                                            <input id="counter" class="counter" type="text" value="1" data-min="0" disabled="disabled">
                                        </div>
                                        <div class="quantity-form-button">
                                            <button id="plus" class="plus"><span>+</span></button>
                                        </div>  
                                    </div>
                                    
                                </th>
                                <th class="unit-price-column">50€</th>
                                <th class="total-price-column">50€</th>
                            </tr>                                                       
                        </table>
                    </div>
                </div>
            </div>



            <div class="desktop-two-columns mobile-one-column desktop-two-columns-buttons">
                <div class="column">
                    <div class="pay-button bold">
                        <button>Continuar con el pago</button>
                    </div>
                </div>
                <div class="column">
                    <div class="back-shop bold">
                        <button>Volver a la tienda</button>
                    </div>
                </div>
            </div>
            <!--  
              
                <div class="desktop-four-columns mobile-one-column desktop-four-columns-cart
                ">
                    <div class="column column-products">
                        <div class="product-cart
                        -title">
                            <span>Producto/s</span>
                        </div>                                                     
                    </div>
                    <div class="column column-quantity">
                        <div class="product-cart
                        -quantity">
                            <span>Cantidad</span>
                        </div>                                        
                    </div>
                    <div class="column column-unit-price">
                        <div class="unit-cart
                        -price">
                            <span>Precio Unidad</span>
                        </div>                        
                    </div>
                    <div class="column column-total-price">
                        <div class="total-product-cart
                        -price">
                            <span>Precio Total</span>
                        </div>                        
                    </div>                   
                </div>
                <div class="desktop-four-columns mobile-one-column desktop-four-columns-cart">
                    <div class="column column-products">
                        <div class="desktop-two-columns mobile-one-column desktop-two-columns-product">
                            <div class="column column-image-product">
                                <div class="image-product">
                                    <img src="images/A1.png">
                                </div>
                            </div>
                            <div class="column column-product-name">
                                <div class="product-name">
                                    <span>English Beginners</span>
                                </div> 
                            </div>
                        </div>                    
                                                                          
                    </div>
                    <div class="column column-quantity">
                        <div class="product-quantity">
                            <div class="quantity-counter">
                                <div class="quantity-form-button-less">
                                    <button>-</button>
                                </div>
                                <div class="quantity-form-input">
                                    <input type="number" value="1">
                                </div>
                                <div class="quantity-form-button-plus">
                                    <button>+</button>
                                </div>
                            </div>
                        </div>                                        
                    </div>
                    <div class="column column-unit-price">
                        <div class="unit-price">
                            <span>50€</span>
                        </div>                        
                    </div>
                    <div class="column column-total-price">
                        <div class="total-product-price">
                            <span>50€</span>
                        </div>                        
                    </div>                   
                </div>  
                -->
              


        @endsection