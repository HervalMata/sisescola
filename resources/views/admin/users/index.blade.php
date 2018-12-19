@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <h3>Listagem de Usuário</h3>
            {!! Button::success('Novo Usuário')->asLinkTo(route('admin.users.create')) !!}
        </div>
        <div class="row">
            {!! Table::withContents($users->items()) !!}

            {!! $users->links() !!}
        </div>
    </div>
@endsection