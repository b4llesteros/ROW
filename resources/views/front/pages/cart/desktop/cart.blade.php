@extends('front.layout.master')   

    @section('content')

        <div class="desktop-one-column">
            <div class="column">
                <div class="cart-title">
                    @include('front.components.desktop.title')
                </div>
            </div>
        </div>
        <div class="desktop-one-column">
            <div class="column">
                <div class="table-cart">
                    @if(isset($carts))
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
                                @foreach($carts as $cart)
                                    <tr>
                                        <td data-label="Product">{{$cart->price->product->title}}</td>
                                        <td data-label="Quantity">
                                            <div class="plus-minus-container">
                                                @include('front.components.desktop.plusminusbutton')
                                            </div>
                                        </td>
                                        <td data-label="Unit Price">{{$cart->price->base_price}}€</td>
                                        {{-- <td data-label="Total Units Price">{{($cart->quantity)*($cart->price->base_price)}}€</td>                           --}}
                                        <td>
                                            <input value="{{($cart->quantity)*($cart->price->base_price)}}€" disabled>
                                        </td>                                  
                                @endforeach                                
                            </tbody>
                        </table>
                        <div class="total-price-all-products">
                            <div class="total-tax-title">
                                <h3>Total tax</h3>
                            </div>
                            <div class="total-tax-value">
                                <p></p>
                            </div>
                            <div class="total-price-title">
                                <h3>Total base price</h3>
                            </div>
                            <div class="total-price-value">
                                <p></p>
                            </div>
                        </div>
                    @endif 
                </div>                
            </div>
        </div>
        <div class="desktop-two-columns desktop-two-columns-buttons">
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