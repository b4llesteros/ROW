
@extends('front.layout.master')  

    @section('content')


        <main>          
            <div class="desktop-one-column">
                <div class="column column-title">
                    @include('front.components.desktop.title')
                </div>
            </div>
            <div class="desktop-two-columns contact-columns">
                <div class="column">
                    <div class="column-information-title">
                        <h2>Datos de contacto</h2>
                    </div>
                    <div class="contact">
                        <div class="contact-column">
                            <div class="contact-column-icon">
                                <svg  viewBox="0 0 24 24">
                                    <path d="M20,15.5C18.8,15.5 17.5,15.3 16.4,14.9C16.3,14.9 16.2,14.9 16.1,14.9C15.8,14.9 15.6,15 15.4,15.2L13.2,17.4C10.4,15.9 8,13.6 6.6,10.8L8.8,8.6C9.1,8.3 9.2,7.9 9,7.6C8.7,6.5 8.5,5.2 8.5,4C8.5,3.5 8,3 7.5,3H4C3.5,3 3,3.5 3,4C3,13.4 10.6,21 20,21C20.5,21 21,20.5 21,20V16.5C21,16 20.5,15.5 20,15.5M5,5H6.5C6.6,5.9 6.8,6.8 7,7.6L5.8,8.8C5.4,7.6 5.1,6.3 5,5M19,19C17.7,18.9 16.4,18.6 15.2,18.2L16.4,17C17.2,17.2 18.1,17.4 19,17.4V19Z" />
                                </svg>
                            </div>
                            <div class="contact-title">
                                <h3>+34 000 00 00 00</h3>
                            </div>
                        </div>
                        <div class="contact-column">
                            <div class="contact-column-icon">
                                <svg  viewBox="0 0 24 24">
                                    <path d="M12,15C12.81,15 13.5,14.7 14.11,14.11C14.7,13.5 15,12.81 15,12C15,11.19 14.7,10.5 14.11,9.89C13.5,9.3 12.81,9 12,9C11.19,9 10.5,9.3 9.89,9.89C9.3,10.5 9,11.19 9,12C9,12.81 9.3,13.5 9.89,14.11C10.5,14.7 11.19,15 12,15M12,2C14.75,2 17.1,3 19.05,4.95C21,6.9 22,9.25 22,12V13.45C22,14.45 21.65,15.3 21,16C20.3,16.67 19.5,17 18.5,17C17.3,17 16.31,16.5 15.56,15.5C14.56,16.5 13.38,17 12,17C10.63,17 9.45,16.5 8.46,15.54C7.5,14.55 7,13.38 7,12C7,10.63 7.5,9.45 8.46,8.46C9.45,7.5 10.63,7 12,7C13.38,7 14.55,7.5 15.54,8.46C16.5,9.45 17,10.63 17,12V13.45C17,13.86 17.16,14.22 17.46,14.53C17.76,14.84 18.11,15 18.5,15C18.92,15 19.27,14.84 19.57,14.53C19.87,14.22 20,13.86 20,13.45V12C20,9.81 19.23,7.93 17.65,6.35C16.07,4.77 14.19,4 12,4C9.81,4 7.93,4.77 6.35,6.35C4.77,7.93 4,9.81 4,12C4,14.19 4.77,16.07 6.35,17.65C7.93,19.23 9.81,20 12,20H17V22H12C9.25,22 6.9,21 4.95,19.05C3,17.1 2,14.75 2,12C2,9.25 3,6.9 4.95,4.95C6.9,3 9.25,2 12,2Z" />
                                </svg>
                            </div>
                            <div class="contact-title">
                                <h3>info@home.com</h3>
                            </div>
                        </div>
                        <div class="contact-column">
                            <div class="contact-column-icon">
                                <svg  viewBox="0 0 24 24">
                                    <path d="M12,2C15.31,2 18,4.66 18,7.95C18,12.41 12,19 12,19C12,19 6,12.41 6,7.95C6,4.66 8.69,2 12,2M12,6A2,2 0 0,0 10,8A2,2 0 0,0 12,10A2,2 0 0,0 14,8A2,2 0 0,0 12,6M20,19C20,21.21 16.42,23 12,23C7.58,23 4,21.21 4,19C4,17.71 5.22,16.56 7.11,15.83L7.75,16.74C6.67,17.19 6,17.81 6,18.5C6,19.88 8.69,21 12,21C15.31,21 18,19.88 18,18.5C18,17.81 17.33,17.19 16.25,16.74L16.89,15.83C18.78,16.56 20,17.71 20,19Z" />
                                </svg>
                            </div>
                            <div class="contact-title">
                                <h3>C/ General</h3>
                            </div>
                        </div>        
                    </div>      
                </div>
                <div class="column">                    
                    <div class="contact-form form-container">                    
                        <form class="admin-form"  >                         
                            <div class="contact-form-element">
                                <div class="contact-form-label">
                                    <label for="name">Nombre</label>
                                </div>        
                                <div class="contact-form-input">        
                                    <input type="text" name="name">
                                </div>
                            </div>                            
                            <div class="contact-form-element">
                                <div class="contact-form-label">
                                    <label for="name">Apellidos</label>
                                </div>        
                                <div class="contact-form-input">        
                                    <input type="text" name="lastname">
                                </div>
                            </div>
                            <div class="contact-form-element">
                                <div class="contact-form-label">
                                    <label for="name">Email</label>
                                </div>    
                                <div class="contact-form-input">    
                                    <input type="email" name="email">
                                </div>
                            </div>
                            <div class="contact-form-element">
                                <div class="contact-form-label">
                                    <label for="name">Teléfono</label>
                                </div>    
                                <div class="contact-form-input">    
                                    <input type="tel" name="telephone">
                                </div>
                            </div>
                            <div class="contact-form-element ">
                                <div class="contact-form-label">
                                    <label for="name">Escribe aquí el mensaje que deseas enviar</label>
                                </div>    
                                <div class="contact-form-input ">    
                                    <textarea></textarea> 
                                </div>   
                            </div>  
                            <div class="contact-form-element contact-form-element-button">    
                                <button class="send-button">Enviar</button>
                            </div>                              
                        </form>                 
                    </div>
                </div>
            </div>          
    @endsection  