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
                            <div class="column">
                                <div class="payment-section">
                                    <h2>Información de pago</h2>
                                </div>
                                <form action="{{route("checkout_store")}}" class="checkout-form" id="form">
                                    <input type="hidden" name="id" value="{{isset($cart->id) ? $cart->id:''}}">
                                    <div class="container-content">
                                        <div class="content-question-answer">
                                            <div class="form-group">
                                                <div class="form-label">
                                                    <span>Total base price</span>
                                                </div>
                                                <div class="form-input">
                                                    <input name="total_base_price" value="{{isset($sale->total_base_price) ? $sale->total_base_price:''}}"  class="input-form" placeholder="Escribe la pregunta">
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-label">
                                                    <span>Total tax price</span>
                                                </div>
                                                <div class="form-input">
                                                    <input name="total_tax_price" value="{{isset($sale->total_tax_price) ? $sale->total_tax_price:''}}"  class="input-form" placeholder="Escribe la pregunta">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="form-label">
                                                    <span>Total Price</span>
                                                </div>
                                                <div class="form-input">
                                                    <input name="total_price" value="{{isset($sale->total_price) ? $sale->total_price:''}}"  class="input-form" placeholder="Escribe la pregunta">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="desktop-one-column">
                                        <div class="column">
                                            <div class="pay-button-checkout">
                                                <button >Pagar</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="desktop-one-column">
                            @if(isset($carts))
                                @foreach($carts as $cart)

                                @endforeach
                            @endif
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
                        {{-- <div class="desktop-one-column">
                            <div class="column">
                                <div class="pay-button-checkout">
                                    <button>Pagar</button>
                                </div>
                            </div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </main>

    @endsection

