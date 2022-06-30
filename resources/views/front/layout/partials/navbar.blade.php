<header>
    <div class="desktop-one-column mobile-one-column">
        <div class="column">
            <div class="navbar">  
                <ul>    
                    <li class="menu-option" data-url="{{route('front_home')}}">
                        <svg class="home-icon" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M12 5.69L17 10.19V18H15V12H9V18H7V10.19L12 5.69M12 3L2 12H5V20H11V14H13V20H19V12H22L12 3Z" />
                        </svg>
                    </li>      
                    <li class="menu-option" data-section="products" data-url="{{route('front_products')}}"><h2>Products</h2></li> 
                    <li class="menu-option" data-section="cart" data-url="{{route('front_cart')}}"><h2>Cart</h2></li>                                          
                    <li class="menu-option" data-section="contact" data-url="{{route('front_contact')}}"><h2>Contact</h2></li>
                    <li class="menu-option" data-section="faqs" data-url="{{route('front_faqs')}}"><h2>Faqs</h2></li> 
                    <li>
                        <div class="hamburger mobile-only">  
                            <span class="bar1"></span>  
                            <span class="bar2"></span>  
                            <span class="bar3"></span>  
                        </div>
                    </li>
                </ul> 
            </div>
        </div> 
    </div>         

    <div class="desktop-one-column">
        <div class="column">
            <div class="navbar mobile-only">
                <ul class="nav-sub mobile-only">  
                    
                    <li class="list-item mobile-only">Grammar</li>
                    <li class="list-item mobile-only">Vocabulary</li>
                    <li class="list-item mobile-only">Listening</li> 
                    <li class="list-item mobile-only">Reading</li>  
                    <li class="list-item mobile-only">Products</li> 
                </ul>  
            </div>
        </div>
    </div>                                                  
</header>