@extends('admin.layout.table_form')

@section('table')      
    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Creado</th>
                <th> @include('admin.components.addbutton') </th>                                       
            </tr>
            @if(isset($faqs))     
                @foreach($faqs as $faq_element)
                    <tr>
                        <td>{{$faq_element->id}}</td>
                        <td>{{$faq_element->name}}</td>
                        <td>{{$faq_element->created_at}}</td>    
                        <td>
                            <div class="table-buttons">
                                @include('admin.components.deletebutton')
                                @include('admin.components.editbutton')
                            </div>
                        </td>
                    </tr>
                    @endforeach
                @endif                        
        </table>
    </div>   
@endsection

@section('form')

    @if(isset($faq))  

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
                            @include('admin.components.savebutton')
                        </li>                                
                        <li>
                            @include('admin.components.cleanbutton')
                        </li>
                        <li>
                            @include('admin.components.onoffbutton')
                        </li>
                        <li>
                            @include('admin.components.closeeditsection')
                        </li>
                    </ul>
                </div>
            </div>  
            <div class="container-content">
                <div class="content content--active" data-tab="content">                
                    <div class="desktop-one-column mobile-one-column"> 
                                                                       
                        <form class="admin-form" action="{{route("faqs_store")}}">   
                            {{-- Este input es obligatorio en todo formualrio, como es de 
                            tipo hidden, es un dato que está escondido, y sirve para enviar un dato
                            al servidor sin que el usuario lo sepa, si crear un usuario nuevo este
                            input no tendrá valor, pero si le das al botón editar, y el usuario existe
                            el input tendrá la ID corespondiente --}}                            
                            <input type="hidden" name="id">  
                            <div class="container-content">
                                <div class="content-question-answer">
                                    <div class="form-group">
                                        <div class="form-label">
                                            <span>Nombre</span>
                                        </div>
                                        <div class="form-input">
                                            {{-- el atributo name tiene que ser lo mismo que el campo de la base de datos --}}
                                            <input name="name" value="{{isset($faq->name) ? $faq->name:''}}" id="name-input" class="input-question" placeholder="Escribe la pregunta">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label">
                                            <span>Título</span>
                                        </div>
                                        <div class="form-input">
                                            {{-- el atributo name tiene que ser lo mismo que el campo de la base de datos --}}
                                            <input name="title" value="{{isset($faq->title) ? $faq->title:''}}" id="name-input" class="input-question" placeholder="Escribe la pregunta">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="form-label">
                                            <span>Descripción</span>
                                        </div>
                                        <div class="form-input">
                                            {{-- el atributo name tiene que ser lo mismo que el campo de la base de datos --}}
                                            <textarea class="ckeditor" value="{{isset($faq->description) ? $faq->description:''}}" id="name-input" name="description" placeholder="Escribe la respuesta"></textarea>
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
                                        <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
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
                                        <path  d="M20 18H4V8H20M20 6H12L10 4H4A2 2 0 0 0 2 6V18A2 2 0 0 0 4 20H20A2 2 0 0 0 22 18V8A2 2 0 0 0 20 6M16 17H14V13H11L15 9L19 13H16Z" />
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
    @endif 

@endsection
