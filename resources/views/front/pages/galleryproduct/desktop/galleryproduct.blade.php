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
            <div class="desktop-three-columns">
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt="">                        
                        </div>
                        <div class="product-title">
                            <h2>Starter</h2>
                        </div>
                        <div class="product-price">
                            <h3>50€</h3>
                        </div>
                        <div class="product-button">
                            <a href="{{trans('productpage')}}"><button>Ficha</button></a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt=""> 
                        </div>
                        <div class="product-title">
                            <h2>Elementary</h2>
                        </div>
                        <div class="product-price">
                            <h3>150€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt="">  
                        </div>
                        <div class="product-title">
                            <h2>Intermediate</h2>
                        </div>
                        <div class="product-price">
                            <h3>200€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="desktop-three-columns">
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt="">                        
                        </div>
                        <div class="product-title">
                            <h2>Upper Intermediate</h2>
                        </div>
                        <div class="product-price">
                            <h3>300€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt=""> 
                        </div>
                        <div class="product-title">
                            <h2>Expert</h2>
                        </div>
                        <div class="product-price">
                            <h3>350€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt="">
                        </div>
                        <div class="product-title">
                            <h2>Mastery</h2>
                        </div>
                        <div class="product-price">
                            <h3>400€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
            </div>            
            <div class="desktop-three-columns">
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt="">                     
                        </div>
                        <div class="product-title">
                            <h2>Learn how to listen</h2>
                        </div>
                        <div class="product-price">
                            <h3>30€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt=""> 
                        </div>
                        <div class="product-title">
                            <h2>Learn how to read</h2>
                        </div>
                        <div class="product-price">
                            <h3>30€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="{{Storage::url('starterreading.png')}}" alt="">
                        </div>
                        <div class="product-title">
                            <h2>Learn how to write</h2>
                        </div>
                        <div class="product-price">
                            <h3>30€</h3>
                        </div>
                        <div class="product-button">
                            <button>Ficha</button>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </div>       
@endsection  


