@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Ver Turma</h3>
            @php
                $linkEdit = route('admin.class_informations.edit', ['class_information' => $class_information->id]);
                $linkDelete = route('admin.class_informations.destroy', ['class_information' => $class_information->id]);
            @endphp
            {!! Button::warning('Editar')->asLinkTo($linkEdit) !!}
            {!! Button::danger(Icon::remove().' Excluir')->asLinkTo($linkDelete)
                    ->addAttributes([
                        'onClick' => "event.preventDefault();document.getElementById(\"form-delete\").submit();"
                    ])
             !!}

            @php
                $formDelete = FormBuilder::plain([
                    'id' => 'form-delete',
                    'url' => $linkDelete,
                    'method' => 'DELETE',
                    'style' => 'display:none'
                ])
            @endphp

            {!! form($formDelete) !!}

            <br/><br/>
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th scope="row">ID</th>
                    <td>{{$class_information->id}}</td>
                </tr>
                <tr>
                    <th scope="row">Data Inicial</th>
                    <td>{{$class_information->date_start}}</td>
                </tr>
                <tr>
                    <th scope="row">Data Final</th>
                    <td>{{$class_information->date_end}}</td>
                </tr>
                <tr>
                    <th scope="row">Ciclo</th>
                    <td>{{$class_information->cycle}}</td>
                </tr>
                <tr>
                    <th scope="row">Sub-divisão</th>
                    <td>{{$class_information->subdivision}}</td>
                </tr>
                <tr>
                    <th scope="row">Semestre</th>
                    <td>{{$class_information->semester}}</td>
                </tr>
                <tr>
                    <th scope="row">Ano</th>
                    <td>{{$class_information->year}}</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection