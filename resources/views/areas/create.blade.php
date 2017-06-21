
@extends('app')

@section('content')
    <div class="container">
        <h1>Nova Área</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => 'areas/store']) !!}

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição') !!}
            {!! Form::text('descricao', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('latitude', 'Latitude') !!}
            {!! Form::text('latitude', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('longitude', 'Longitude') !!}
            {!! Form::text('longitude', null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Criar área', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
