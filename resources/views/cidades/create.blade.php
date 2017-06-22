
@extends('app')

@section('content')
    <div class="container">
        <h1>Nova Cidade</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => 'cidades/store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('id_estado', 'Estado') !!}
            {{ Form::select('id_estado', \App\Estado::orderBy('nome')->pluck('nome', 'id')->toArray(), null, ['class'=>'form-control']) }}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Cidade', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
