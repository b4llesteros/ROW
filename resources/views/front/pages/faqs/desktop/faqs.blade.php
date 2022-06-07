@extends('front.layout.master')   

@section('content')  

    <div class="desktop-one-column">
        <div class="column">
             <div class="faqs-title">
                @include('front.components.desktop.title')             
                <svg  viewBox="0 0 24 24">
                    <path  d="M17,12V3A1,1 0 0,0 16,2H3A1,1 0 0,0 2,3V17L6,13H16A1,1 0 0,0 17,12M21,6H19V15H6V17A1,1 0 0,0 7,18H18L22,22V7A1,1 0 0,0 21,6Z" />
                </svg>                 
             </div>
        </div>       
    </div>  
    
    <div class="desktop-one-column">
        @if(isset($faqs))
            @foreach($faqs as $faq)                
                <div class="faqs-container">
                    <div class="faq">
                        <div class="faq-title">
                            <h3 class="faq-title">{{$faq->title}}</h3>
                        </div>
                        <div class="faq-content">
                            <p class="faq-text">{{$faq->description}}</p>      
                        </div>         
                        <div class="faq-button">
                            <button class="faq-icon">
                                <svg viewBox="0 0 24 24">
                                    <path  d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" />
                                </svg>
                            </button>
                        </div>    
                    </div>         
                </div>
            @endforeach
        @endif    
    </div>

@endsection