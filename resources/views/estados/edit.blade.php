
@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Estado: {{$estado->nome}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['route' => ["estados.update", $estado->id], 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', $estado->nome, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sigla', 'Sigla') !!}
            {!! Form::text('sigla', $estado->sigla, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Estado', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
