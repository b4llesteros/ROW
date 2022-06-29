@extends('admin.layout.table_form')

@section('table')
    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Nº Ticket</th>
                <th>Total</th>
                <th>Creado</th>
                <th> @include('admin.components.addbutton') </th>
            </tr>
            @if(isset($sales))
                @foreach($sales as $sale_element)
                    <tr>
                        <td>{{$sale_element->id}}</td>
                        <td>{{$sale_element->ticket_number}}</td>
                        <td>{{$sale_element->total_price}}€</td>
                        <td>{{$sale_element->created_at}}</td>
                        <td>
                            <div class="table-buttons">
                                <div class="table-button delete-button" data-url="{{route('sales_destroy', ['sale' => $sale_element->id])}}">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M12,2C17.43,2 22,6.47 22,12C22,17.43 17.43,22 12,22C6.47,22 2,17.43 2,12C2,6.47 6.47,2 12,2M17,7H14.4L13.4,6H10.4L9.4,7H7V9H17V7M9,18H14A1,1 0 0,0 16,17V10H8V17A1,1 0 0,0 9,18Z" />
                                    </svg>
                                </div>
                                <div class="table-button edit-button" data-url="{{route('sales_edit', ['sale' => $sale_element->id])}}">
                                    <svg  viewBox="0 0 24 24">
                                        <path  d="M9.74 20.84C11.43 20.14 11.14 18.22 10.24 17C9.34 14.74 8.12 14.89 6.88 14.06C6 13.4 4.19 12.8 4.44 12C4.26 11.67 3.69 11.06 4.27 10.94C4.86 10.82 4.88 11.4 6.4 11.62C7.31 12 8.21 12.44 9.04 12.96L10.06 11.26C8.4 10.23 6.4 9.32 4.64 9.04C3.48 8.89 2.46 9.11 2.1 10.26C1.78 11.24 2.29 12.24 2.87 13.03C4.24 14.86 6.37 14.74 7.96 17.32C8.3 17.64 8.71 18.04 8.91 18.4C9.12 18.94 9.07 18.97 8.6 18.97C7.36 18.97 4.81 18 4.8 17.36L3.79 19.06C4.32 20 7.88 21.47 9.74 20.84M18.96 7.33L13.29 13H11V10.71L16.67 4.03L18.96 7.33M22.36 6.44C22.34 6.84 22.04 7.16 21.72 7.47L19.2 10L18.33 9.13L20.93 6.44L20.34 4.94L19.67 6.62L17.38 4.33L19.43 2.18C19.77 1.94 20.16 1.94 20.39 2.18L21.82 3.61C22.06 3.83 22.06 4.23 21.82 4.47C21.61 4.68 21.41 4.88 21.41 4.08C21.39 4.28 21.49 4.4 21.79 4.67C22.08 4.97 22.37 6.24 22.36 6.44Z" />
                                    </svg>
                                </div>

                            </div>
                        </td>
                    </tr>
                @endforeach
            @endif
        </table>
    </div>
@endsection

@section('form')

    @if(isset($sale))

        @include('admin.components.menu')

        <div class="desktop-one-column">
            <div class="column">
                <div class="edit-section">
                    <div class="desktop-one-column mobile-one-column">
                        <div class="column">
                            <div class="container--tabs">
                                <ul class="container-tabs">
                                    <li class="tab tab--active" data-tab="content" >Contenido</li>
                                    <li class="tab" data-tab="seo">SEO</li>
                                    <li class="tab" data-tab="images">Imágenes</li>
                                    <li>
                                        <div class="save-button" id="save-button">
                                            <svg viewBox="0 0 24 24">
                                                <path  d="M14,9H4V4H14M12,19A3,3 0 0,1 9,16A3,3 0 0,1 12,13A3,3 0 0,1 14,16A3,3 0 0,1 12,19M17,3H4C3.89,3 3,3.9 3,4V19A2,2 0 0,0 4,21H19A2,2 0 0,0 21,19V7L17,3Z" />
                                            </svg>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="create-button" data-url="{{route('sales_create')}}">
                                            <svg  viewBox="0 0 24 24">
                                                <path  d="M19.36,2.72L20.78,4.14L14.06,9.84C16.13,11.39 16.28,13.24 14.38,14.44L9.06,8.12C10.26,7.22 12.11,7.37 13.64,8.44L19.36,2.72M4.93,17.47C3.92,14.46 2.69,13.16 2.34,10.92L7.23,8.83L14.67,16.27L12.48,21.14C10.34,20.81 7.94,19.48 4.93,17.47Z" />
                                            </svg>
                                        </div>

                                    </li>
                                    <li>
                                        <label class="btn-onoff">
                                            <input id="checkbox" type="checkbox" name="name" data-onoff="toggle" checked ><span></span>
                                        </label>
                                    </li>
                                    <li>
                                        <div class="close-edit">
                                            <svg  viewBox="0 0 24 24">
                                                <path fill="currentColor" d="M13.46,12L19,17.44V19H17.44L12,13.46L6.46,19H4V17.44L10.44,12L4,6.46V4H6.46L12,10.44L17.44,4H19V6.46L13.46,12Z" />
                                            </svg>
                                        </div>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="container-content">
                            <div class="content content--active" data-tab="content">
                                <div class="desktop-one-column mobile-one-column">
                                    <form class="admin-form" action="{{route("sales_store")}}">
                                        <input type="hidden" name="id" value="{{isset($sale->name) ? $sale->name:''}}">
                                        <div class="container-content">
                                            <div class="content-question-answer">
                                                <div class="form-group">
                                                    <div class ="desktop-one-column">
                                                        <div class="column">
                                                            <div class="sale-title">
                                                                <h3>Datos de la venta</h3>
                                                            </div>                                                                                                                       
                                                        </div>
                                                        <div class="column">
                                                            <div class="sale-title">
                                                                <h4>Número de ticket:</h4>
                                                            </div>
                                                            <div class="ticket-data">
                                                                {{$sale->ticket_number}}
                                                            </div>                                                            
                                                        </div>
                                                        <div class="column">
                                                            <div class="sale-title">
                                                                <h4>Precio Total:</h4>
                                                            </div>
                                                            <div class="ticket-data">
                                                                {{$sale->total_price}}€
                                                            </div>                                                            
                                                        </div>
                                                        <div class="column">
                                                            <div class="sale-title">
                                                                <h4>Fecha de emisión:</h4>
                                                            </div>
                                                            <div class="ticket-data">
                                                                {{$sale->date_emission}}
                                                            </div>                                                            
                                                        </div>
                                                        <div class="column">
                                                            <div class="sale-title">
                                                                <h3>Datos de cliente</h3>
                                                            </div>                                                                                                                      
                                                        </div>
                                                            @if(isset($sale->client))
                                                                <div class="column">
                                                                    <div class="sale-title">
                                                                        <h4>Nombre:</h4>
                                                                    </div>                                                           
                                                                    <div class="ticket-data">
                                                                        {{$sale->client->name}}                                                               
                                                                    </div>                                                                                                                                   
                                                                </div>
                                                                <div class="column">
                                                                    <div class="sale-title">
                                                                        <h4>Apellidos:</h4>
                                                                    </div>
                                                                    <div class="ticket-data">
                                                                        {{$sale->client->surname}}
                                                                    </div>                                                                                                                          
                                                                </div>
                                                                <div class="column">
                                                                    <div class="sale-title">
                                                                        <h4>Teléfono:</h4>
                                                                    </div>
                                                                    <div class="ticket-data">
                                                                        {{$sale->client->phone}}
                                                                    </div>                                                            
                                                                </div>                                                                
                                                                <div class="column">
                                                                    <div class="sale-title">
                                                                        <h4>Address:</h4>
                                                                    </div>
                                                                    <div class="ticket-data">
                                                                        {{$sale->client->address}}
                                                                    </div>                                                            
                                                                </div>    
                                                                <div class="column">
                                                                    <div class="sale-title">
                                                                        <h3>Productos</h3>
                                                                    </div>                                                                                                                      
                                                                </div> 
                                                            @endif                                                      
                                                        @if(isset($carts))
                                                            @foreach($carts as $cart)
                                                                <div class="column">
                                                                    <div class="product-cart">
                                                                        <div class="product-name">
                                                                            <span>Producto:{{$cart->price->product->name}}</span>                                                                        
                                                                        </div>
                                                                        <div class="product-quantity">
                                                                            <span>Cantidad:{{$cart->quantity}}</span>
                                                                        </div>
                                                                        <div class="product-price">
                                                                            <span>Precio:{{$cart->price->base_price}}</span>
                                                                        </div>
                                                                    </div>    
                                                                </div> 
                                                            @endforeach
                                                        @endif                                           
                                                    </div>                                                
                                                </div>                                                
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                            <div class="content" data-tab="seo">
                                <span>Posicionamiento SEO</span>
                            </div>
                            <div class="content" data-tab="images">
                                <div class="desktop-two-columns">
                                    <div class="column">
                                        <div class="image-selector">
                                            <label class="file-input">
                                            <div id="image-preview">
                                                <svg class="image-preview-svg" viewBox="0 0 24 24">
                                                    <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L14 9L19 13H16Z" />
                                                </svg>
                                                <img class="image-preview-element" src="">
                                                <div class="image-preview-delete">
                                                    <svg   viewBox="0 0 24 24">
                                                        <path  d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <input type="file" name="image-product" class="choose-file" accept="image/*" >
                                        </div>
                                    </div>
                                    <div class="column">
                                        <div class="image-selector">
                                            <label class="file-input">
                                            <div id="image-preview">
                                                <svg class="image-preview-svg" viewBox="0 0 24 24">
                                                    <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L14 9L19 13H16Z" />
                                                </svg>
                                                <img class="image-preview-element" id="image-preview-element" src="">
                                                <div class="image-preview-delete">
                                                    <svg  viewBox="0 0 24 24">
                                                        <path  d="M20 6.91L17.09 4L12 9.09L6.91 4L4 6.91L9.09 12L4 17.09L6.91 20L12 14.91L17.09 20L20 17.09L14.91 12L20 6.91Z" />
                                                    </svg>
                                                </div>
                                            </div>
                                            <input type="file" name="image-featured" class="choose-file" accept="image/*"  >
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif

@endsection
