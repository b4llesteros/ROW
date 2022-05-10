@extends('front.layout.master')   

    @section('content')

        <div class="desktop-one-column mobile-one-colum">
            <div class="column">
                <div class="cart-title">
                    <h2>Cart</h2>
                </div>
            </div>
        </div>
        <div class="desktop-one-column mobile-one-column">
            <div class="column">
                <div class="table-cart">
                    <table>                        
                        <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Unit Price</th>
                            <th scope="col">Total Units Price</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td data-label="Product">English for Dummies</td>
                            <td data-label="Quantity">
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
                            </td>
                            <td data-label="Unit Price">20€</td>
                            <td data-label="Total Units Price">20€</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="Product">Starter Level</td>
                            <td data-label="Quantity">
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
                            </td>
                            <td data-label="Unit Price">40€</td>
                            <td data-label="Total Units Price">120€</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="Product">Advanced Level</td>
                            <td data-label="Quantity">
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
                            </td>
                            <td data-label="Unit Price">50€</td>
                            <td data-label="Total Units Price">250€</td>
                        </tr>                    
                        </tbody>
                    </table>
                    <div class="total-price-all-products">
                        <div class="total-price-title">
                            <h3>Total price</h3>
                        </div>
                        <div class="total-price-value">
                            <p>250€</p>
                        </div>
                    </div>
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