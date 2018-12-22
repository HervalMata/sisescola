@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Administração de alunos na turma</h3>
            <!-- Criar componente Vue.js -->
            <class-teaching class-information="{{ $class_information->id }}"></class-teaching>
        </div>
    </div>
@endsection