@extends('admin.layout.table_form')

@section('table')



    <div class="table">
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Telephone</th>
                <th>Email</th>
                <th class="adress">Adress</th>
            </tr>
            <tr>
                <td>1</td>
                <td>usuario 1</td>
                <td>Teléfono 1</td>
                <td>email@email.com</td>
                <td class="adress">Calle Random nº infinito</td>
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>2</td>
                <td>usuario 2</td>
                <td>Teléfono 2</td>
                <td>email@email.com</td>
                <td class="adress">Calle Random nº infinito</td>
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>3</td>
                <td>usuario 3</td>
                <td>Teléfono 3</td>
                <td>email@email.com</td>
                <td class="adress">Calle Random nº infinito</td>
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>4</td>
                <td>usuario 4</td>
                <td>Teléfono 4</td>
                <td>email@email.com</td>
                <td class="adress">Calle Random nº infinito</td>
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>5</td>
                <td>usuario 5</td>
                <td>Teléfono 5</td>
                <td>email@email.com</td>
                <td class="adress">Calle Random nº infinito</td>
                <td>
                    <div class="table-buttons">
                        @include('admin.components.deletebutton')
                        @include('admin.components.editbutton')
                    </div>
                </td>
            </tr>
            <tr>
                <td>6</td>
                <td>usuario 6</td>
                <td>Teléfono 6</td>
                <td>email@email.com</td>
                <td class="adress">Calle Random nº infinito</td>
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
                    @include('admin.components.usereditsection')
                </div>
            </div>
    </div>
@endsection
