@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Nova Disciplina</h3>
            {!! form($form->add('insert', 'submit', [
                'attr' => ['class' => 'btn btn-success btn-block'],
                'label' => Icon::create('floppy-disk'). ' Cadastrar'
            ])) !!}
        </div>
    </div>
@endsection