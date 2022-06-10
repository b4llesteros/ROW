@extends('front.layout.master')  

@section('content')
    <div class="desktop-two-columns-aside">
        <div class="column-aside desktop-only">
            <div class="desktop-one-colum">
                <div class="column-categories">
                    <div class="categories-title">
                        <h3>Categories</h3>
                    </div>
                    @if(isset($product_categories))
                        @foreach($product_categories as $category_element)
                            <div class="category-button {{isset($category) && $category->id == $category_element->id ? 'active' : ''}}" data-url="{{route('front_category', ['category' => $category_element->id])}}">
                                <h4>{{$category_element->title}}</h4>
                            </div>
                        @endforeach    
                    @endif
                </div>
                <div class="column-filter">
                    <div class="filter-title">
                        <h3>Filters</h3>
                    </div>
                    <div class="filter-button">
                        <h4>Ascendente</h4>
                    </div>
                </div>
                {{-- <div class="column-categories">
                    <div class="categories-title">
                        <h3>Filtro</h3>
                    </div>
                    <div class="filter-button" data-url="">
                        <h4>Ascedente</h4>
                </div> --}}
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
            <div class="products-gallery" id="">
                @if(isset($products))
                    @foreach($products as $product)                        
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


