
@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Cliente: {{$cliente->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => "clientes/$cliente->id/update", 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $cliente->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sobrenome', 'Sobrenome') !!}
            {!! Form::text('latitude', $cliente->sobrenome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('cpf', 'CPF') !!}
            {!! Form::text('cpf', $cliente->cpf, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Cliente', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
