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
                                <div class="plus-minus-container">
                                    <div class="quantity-form-button">
                                        <button  data-type="minus"class="plus-minus-button"><span>-</span></button>
                                    </div>
                                    <div class="quantity-input">
                                        <input class="plus-minus-input" type="number" value="1" data-min="0" disabled="disabled">
                                    </div>
                                    <div class="quantity-form-button">
                                        <button class="plus-minus-button" data-type="plus">+</button>
                                    </div>  
                                </div>
                                
                            </th>
                            <th class="unit-price-column">50€</th>
                            <th class="total-price-column">50€</th>
                        </tr> 
                        <tr class="product-row">
                            <th class="product-column">English for Dummies</th>
                            <th class="quantity-column">
                                <div class="plus-minus-container">
                                    <div class="quantity-form-button">
                                        <button  class="plus-minus-button" data-type="minus">-</button>
                                    </div>
                                    <div class="quantity-input">
                                        <input  class="plus-minus-input" type="text" value="1" data-min="0" disabled="disabled">
                                    </div>
                                    <div class="quantity-form-button">
                                        <button  class="plus-minus-button" data-type="plus"><span>+</span></button>
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

        @endsection