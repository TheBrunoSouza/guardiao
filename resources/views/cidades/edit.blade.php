
@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Cidade: {{$cidade->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["cidades.update", $cidade->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $cidade->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('id_estado', 'Estado') !!}
            {{ Form::select('id_estado', \App\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), $cidade->id_estado, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Cidade', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
