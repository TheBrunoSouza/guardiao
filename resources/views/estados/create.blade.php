
@extends('app')

@section('content')
    <div class="container">
        <h1>Novo Estado</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => 'estados/store']) !!}

        <div class="form-group">
            {!! Form::label('nome', 'Nome') !!}
            {!! Form::text('nome', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('sigla', 'Sigla') !!}
            {!! Form::text('sigla', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar Estado', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
