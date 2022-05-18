@extends('front.layout.master')  

    @section('content')
        
            <main>        
                <div class="desktop-two-columns desktop-two-columns-checkout">
                    <div class="column">
                        <div class="desktop-one-column">
                            <div class="data-invoice-title">
                                <h2>Tus Datos</h2>
                            </div>
                        </div>   
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Nombre</h4>
                                </div>
                                <div class="input-form">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Apellidos</h4>
                                </div>
                                <div class="input-form">
                                    <input type="text">
                                </div>
                            </div>
                        </div> 
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Email</h4>
                                </div>
                                <div class="input-form">
                                    <input type="email">
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Teléfono</h4>
                                </div>
                                <div class="input-form">
                                    <input type="text">
                                </div>
                            </div>
                        </div> 
                        <div class="desktop-one-column desktop-one-column-checkout">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Dirección</h4>
                                </div>
                                <div class="input-form-onecolumn">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column desktop-one-column-checkout">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Información adicional sobre la dirección</h4>
                                </div>
                                <div class="input-form-onecolumn">
                                    <input type="text">
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column desktop-one-column-checkout">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Ciudad</h4>
                                </div>
                                <div class="input-form-onecolumn">
                                    <input type="text">
                                </div>
                            </div>
                        </div> <div class="desktop-two-columns">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>País</h4>
                                </div>
                                <div class="input-form">
                                    <input type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Código Postal</h4>
                                </div>
                                <div class="input-form">
                                    <input type="text">
                                </div>
                            </div>
                        </div>                     
                    </div>
                    <div class="column">
                        <div class="desktop-one-column">
                            <div class="total-products">
                                <h2>Resumen de productos</h2>
                            </div>
                        </div>
                        <div class="desktop-one-column ">
                            <div class="column">
                                <div class="table-cart-checkout">
                                    <table>
                                        <tr class="main-row">
                                            <th class="product-column"><h6>Producto/s</h6></th>
                                            <th class="quantity-column"><h6>Cantidad</h6></th>
                                            <th class="unit-price-column"><h6>Precio Unidad</h6></th>
                                            <th class="total-price-column"><h6>Precio total</h6></th>
                                        </tr>
                                        <tr class="product-row">
                                            <th class="product-column">English for Dummies</th>
                                            <th class="quantity-column">
                                                <div class="frame">
                                                <div class="counter">
                                                    <div class ="buttons">
                                                        <div id="minus">-</div>
                                                        <div id="counter">1</div>
                                                        <div id="plus">+</div>
                                                    </div>
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
                    <div class="desktop-one-column">
                        <div class="column">                          
                            <div class="payment-section">
                                <h2>Información de pago</h2>
                                </div>                              
                        </div>                        
                    </div>
                    <div class="desktop-one-column">
                        <table class="table-price">
                            <tr class="main-row">
                                <th>Precio sin iva</th>
                                <th>IVA 21%</th>
                                <th>Precio Transporte</th>
                                <th>Precio total con IVA</th>
                            </tr>
                            <tr class="price-row">
                                <th>50€</th>
                                <th>10.50€</th>
                                <th>10€</th>
                                <th>60.50€</th>
                            </tr>
                        </table>
                    </div>
                    <div class="desktop-one-column">
                        <div class="column">                          
                            <div class="payment-section">
                                <h2>Método de pago</h2>
                                </div>                              
                        </div>                        
                    </div>                    
                    <div class="desktop-oene-column">
                        <table class="table-method-payment">
                            <tr class="main-row">
                                <th><input type="radio">Efectivo</th>
                                <th><input type="radio">Transferencia</th>
                                <th><input type="radio">Tarjeta de crédito</th>
                            </tr>                           
                        </table>                        
                    </div>                 
                    <div class="desktop-one-column">
                        <div class="column">
                            <div class="pay-button-checkout">
                                <button>Pagar</button>
                            </div>
                        </div>
                    </div> 
                </div>    
            </div>            
        </main>

    @endsection  

