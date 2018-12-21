@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Editar Turma</h3>
            {!! form($form->add('edit', 'submit', [
                'attr' => ['class' => 'btn btn-success btn-block'],
                'label' => Icon::create('floppy-disk').'&nbsp;&nbsp;Editar'
            ])) !!}
        </div>
    </div>
@endsection