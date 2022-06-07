@extends('front.layout.master')   

@section('content')

    <div class="mobile-one-column">
        <div class="column">
             <div class="faqs-title">
                <h1>Preguntas Frecuentes</h1> 
                <svg  viewBox="0 0 24 24">
                    <path  d="M17,12V3A1,1 0 0,0 16,2H3A1,1 0 0,0 2,3V17L6,13H16A1,1 0 0,0 17,12M21,6H19V15H6V17A1,1 0 0,0 7,18H18L22,22V7A1,1 0 0,0 21,6Z" />
                </svg>                 
             </div>
        </div>       
    </div>  
    
    <div class="desktop-one-column">
        <div class="faqs-container">
            <div class="faq">
                <div class="faq-title">
                    <h3 class="faq-title">¿Cómo puedo hacer una devolución?</h3>
                </div>
                <div class="faq-content">
                    <p class="faq-text">En tienda o almacén</p>      
                </div>         
                <div class="faq-button">
                    <button class="faq-icon">
                        <svg viewBox="0 0 24 24">
                            <path  d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" />
                        </svg>
                    </button>
                </div>    
            </div>            
            <div class="faq">
                <div class="faq-title">
                    <h3 class="faq-title">¿Cuál es el plazo para hacer una devolución?</h3>
                </div>
                <div class="faq-content">
                    <p class="faq-text">15 días</p>      
                </div>  
                <div class="faq-button">
                    <button class="faq-icon">
                        <svg viewBox="0 0 24 24">
                            <path  d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" />
                        </svg>
                    </button>
                </div>       
            </div>            
            <div class="faq">
                <div class="faq-title">
                    <h3 class="faq-title">¿Cómo puedo contactar para hacer una devolución?</h3>
                </div>
                <div class="faq-content">
                    <p class="faq-text">Manda un mail a email@email.com</p>      
                </div>  
                <div class="faq-button">
                    <button class="faq-icon">
                        <svg viewBox="0 0 24 24">
                            <path  d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" />
                        </svg>
                    </button>
                </div>    
            </div>            
            <div class="faq">
                <div class="faq-title">
                    <h3 class="faq-title">¿Cuando recibiré el importe de mi devolución?</h3>
                </div>
                <div class="faq-content">
                    <p class="faq-text">En un plazo de  24 a 48 horas</p>      
                </div>  
                <div class="faq-button">
                    <button class="faq-icon">
                        <svg viewBox="0 0 24 24">
                            <path  d="M9,4H15V12H19.84L12,19.84L4.16,12H9V4Z" />
                        </svg>
                    </button>
                </div>    
            </div>            
            <div class="faq">
                <div class="faq-title">
                    <h3 class="faq-title">¿Cómo recibiré el importe de la devolución?</h3>
                </div>
                <div class="faq-content">
                    <p class="faq-text">En la forma original de pago
                        En la forma original de pagoEn la forma original de pagoEn la forma original de pago </p>      
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
    </div>

@endsection