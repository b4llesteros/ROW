@extends('admin.layout.table_form')

@section('table')
    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Pregunta</th>
                <th>Respuesta</th>                
            </tr>
            <tr>
                <td>1</td>
                <td>Pregunta 1</td>
                <td>Respuesta 1</td>    
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>Pregunta 2</td>
                <td>Respuesta 2</td>                
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>Pregunta 3</td>
                <td>Respuesta 3</td>    
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>Pregunta 4</td>
                <td>Respuesta 4</td>    
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>Pregunta 5</td>
                <td>Respuesta 5</td>    
                
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>           
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
