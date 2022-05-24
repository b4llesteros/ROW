@extends('admin.layout.table_form')

@section('table')      
            <div class="table">
                <table>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Creado</th>                                        
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
    

    @include('admin.components.menu')

        <div class="desktop-one-column">
            @include('admin.components.deletelayer')
                <div class="column">
                    <div class="edit-section">
                        @include('admin.components.faqseditsection')
                    </div>
                </div>
        </div>


@endsection
