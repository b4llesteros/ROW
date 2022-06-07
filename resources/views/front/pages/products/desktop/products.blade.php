@extends('front.layout.master')  

@section('content')
    <div class="desktop-two-columns-aside">
        <div class="column-aside desktop-only">
            <div class="desktop-one-colum">
                <div class="column-categories">
                    <div class="categories-title">
                        <h3>Categories</h3>
                    </div>
                    <div class="category">
                        <h4>Vocabulary</h4>
                    </div>
                    <div class="category">
                        <h4>Grammar</h4>
                    </div>
                    <div class="category">
                        <h4>Writing</h4>
                    </div>
                    <div class="category">
                        <h4>Listening</h4>
                    </div>
                    <div class="category">
                        <h4>Reading</h4>
                    </div>
                </div>
            </div>
        </div>  
        <div class="column-aside mobile-only">
            <div class="desktop-one-colum">
                <div class="column-categories">
                    <label>Select Category</label>
                   <select class="category-select">
                        <option>Vocabulary</option>
                        <option>Grammar</option>
                        <option>Writing</option>
                        <option>Listening</option>
                        <option>Reading</option>
                   </select>
                </div>
            </div>
        </div>  
        <div class="column-main">
            <div class="desktop-one-column">
                <div class="header-column-main">
                    <div class="total-products">
                        <h5>Mostrando 9 de 9</h5>
                    </div>
                    <div class="filter-products">
                        <select name="select" class="filter-select">
                            <option value="value1" selected>Destacados</option>
                            <option value="value2" >Ofertas</option>
                            <option value="value3">Precio más bajo</option>
                            <option value="value3">Precio más alto</option>
                        </select>                      
                    </div>
                </div>
            </div>
            <div class="products-gallery">
                @if(isset($product))
                    @foreach($product as $product)                        
                        <div class="product-card">
                            <div class="product-image">
                                <img src="" alt="">                        
                            </div>
                            <div class="product-title">
                                <h2>{{$product->title}}</h2>
                            </div>
                            <div class="product-price">
                                <h3>{{$product->price}}</h3>
                            </div>
                            <div class="product-button" >
                                <button class="product-link-button" data-url="{{route('front_product', ['product' => $product->id])}}">Ficha</button>
                            </div>
                        </div>                                                
                    @endforeach
                @endif              
            </div>
        </div>       
@endsection  


