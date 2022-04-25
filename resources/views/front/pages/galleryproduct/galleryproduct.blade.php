@extends('front.layout.master')  

@section('content')
    <div class="desktop-two-columns-aside mobile-one-column">

        <div class="column-aside">
            <div class="desktop-one-colum mobile-one-column">
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

        <div class="column-main">
            <div class="desktop-one-column mobile-one-column">
                <div class="header-column-main">
                    <div class="total-products">
                        <h5>Mostrando 9 de 9</h5>
                    </div>
                    <div class="filter-products">
                        <form>
                            <select name="select">
                                <option value="value1" selected>Destacados</option>
                                <option value="value2" >Ofertas</option>
                                <option value="value3">Precio más bajo</option>
                                <option value="value3">Precio más alto</option>
                                </select>
                        </form>
                    </div>
                </div>
            </div>

            <div class="desktop-three-columns mobile-one-column">
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A1.png">                        
                        </div>
                        <div class="product-title">
                            <h2>Starter</h2>
                        </div>
                        <div class="product-price">
                            <h3>50€</h3>
                        </div>
                        <div class="product-button">
                            <a href="index.html"><button>Ficha</button></a>
                        </div>
                    </div>
                </div>
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/A2.png">  
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
                            <img src="images/B1.png">  
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

            <div class="desktop-three-columns mobile-one-column">
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/B2.png">                        
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
                            <img src="images/C1.png">  
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
                            <img src="images/C2.png">  
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
            
            
            <div class="desktop-three-columns mobile-one-column">
                <div class="column">
                    <div class="product-card">
                        <div class="product-image">
                            <img src="images/starterlistening.png">                        
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
                            <img src="images/starterreading.png">  
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
                            <img src="images/starterwriting.png">  
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


