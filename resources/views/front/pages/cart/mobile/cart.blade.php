@extends('front.layout.master')   

    @section('content')

        <div class="mobile-one-colum">
            <div class="column">
                <div class="cart-title">
                    @include('front.components.desktop.title')
                </div>
            </div>
        </div>
        <div class="mobile-one-column">
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
                                    @include('front.components.desktop.plusminusbutton')
                                </div>
                            </td>
                            <td data-label="Unit Price">20€</td>
                            <td data-label="Total Units Price">20€</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="Product">Starter Level</td>
                            <td data-label="Quantity">
                                @include('front.components.desktop.plusminusbutton')
                            </td>
                            <td data-label="Unit Price">40€</td>
                            <td data-label="Total Units Price">120€</td>
                        </tr>
                        <tr>
                            <td scope="row" data-label="Product">Advanced Level</td>
                            <td data-label="Quantity">
                                @include('front.components.desktop.plusminusbutton')
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
        <div class="mobile-one-column">
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