@extends('front.layout.master')

    @section('content')

        <main>
            <form action="{{route("checkout_store")}}" id="form" class="checkout-form">
                <input type="hidden" name="base_total" value="{{$base_total}}">                            
                <input type="hidden" name="tax_total" value="{{$tax_total}}">                           
                <input type="hidden" name="total" value="{{$total}}">  
                <input type="hidden" name="fingerprint" value="{{$fingerprint}}">        
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
                                    <input name="name" type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Apellidos</h4>
                                </div>
                                <div class="input-form">
                                    <input name="surname" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Email</h4>
                                </div>
                                <div class="input-form">
                                    <input name="email" type="email">
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Teléfono</h4>
                                </div>
                                <div class="input-form">
                                    <input name="phone" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column desktop-one-column-checkout">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Dirección</h4>
                                </div>
                                <div class="input-form-onecolumn">
                                    <input name="address" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column desktop-one-column-checkout">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Información adicional sobre la dirección</h4>
                                </div>
                                <div class="input-form-onecolumn">
                                    <input name="additional_information" type="text">
                                </div>
                            </div>
                        </div>
                        <div class="desktop-one-column desktop-one-column-checkout">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Ciudad</h4>
                                </div>
                                <div class="input-form-onecolumn">
                                    <input name="city" type="text">
                                </div>
                            </div>
                        </div> 
                        <div class="desktop-two-columns">
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>País</h4>
                                </div>
                                <div class="input-form">
                                    <input name="state" type="text">
                                </div>
                            </div>
                            <div class="column">
                                <div class="element-title-form">
                                    <h4>Código Postal</h4>
                                </div>
                                <div class="input-form">
                                    <input name="zip_code" type="text">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column">                            
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
                                    <th><input name="payment_method_id" type="radio" value="1">Efectivo</th>
                                    <th><input name="payment_method_id" type="radio" value="2">Transferencia</th>
                                    <th><input name="payment_method_id" type="radio" value="3">Tarjeta de crédito</th>
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
            </form>           
        </main>

    @endsection

