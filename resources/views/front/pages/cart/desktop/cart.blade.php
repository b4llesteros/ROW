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
                                            <div class="desktop-one-column mobile-one-column">
                                                <div class="column">
                                                    <div class="column-quantity">
                                                        <div class="plus-minus-container">
                                                            <form action ="" class="cart-form">
                                                                <div class="quantity-form-button">
                                                                    <button type="button" class="plus-minus-button-cart" data-type="minus" data-url="{{route('front_minus_cart', ['fingerprint' => $fingerprint,'price_id' => $cart->price_id ])}}">-</button>
                                                                </div>
                                                                <div class="quantity-input">
                                                                    <input  class="plus-minus-input" type="text" value="{{$cart->quantity}}" data-min="0" disabled="disabled">
                                                                </div>
                                                                <div class="quantity-form-button">
                                                                    <button type="button" class="plus-minus-button-cart" data-type="plus" data-url="{{route('front_plus_cart', ['fingerprint' => $fingerprint,'price_id' => $cart->price_id ])}}"><span>+</span></button>
                                                                </div> 
                                                            </form>    
                                                        </div>                         
                                                    </div>                               
                                                </div>    
                                            </div>                                           
                                        </td>
                                        <td data-label="Unit Price">{{$cart->price->base_price}}€</td>
                                        {{-- <td data-label="Total Units Price">{{($cart->quantity)*($cart->price->base_price)}}€</td>                           --}}
                                        <td>
                                            <input class="total-quantity" value="{{($cart->quantity)*($cart->price->base_price)}}€" disabled>
                                        </td>                                  
                                @endforeach                                
                            </tbody>
                        </table>
                        <div class="total-price-all-products">
                            <div class="total-tax-title">
                                <h3>Type of tax</h3>
                            </div>
                            <div class="total-tax-value">
                                <p>{{$cart->price->tax->type}}%</p>
                            </div>
                            <div class="total-tax-title">
                                <h3>Total of tax</h3>
                            </div>
                            <div class="total-tax-value">
                                <p>{{((($cart->quantity)*($cart->price->base_price))/($cart->price->tax->multiplicator))-($cart->price->base_price)}}</p>
                            </div>
                            <div class="total-price-title">
                                <h3>Total base price</h3>
                            </div>
                            <div class="totalPriceValue">
                                <p>{{(($cart->quantity)*($cart->price->base_price))}}</p>  
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