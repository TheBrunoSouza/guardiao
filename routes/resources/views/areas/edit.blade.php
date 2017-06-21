
@extends('app')

@section('content')
    <div class="container">
        <h1>Editando Área: {{$area->descricao}}</h1>

        @if($errors->any())
            <ul class="alert alert-danger">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        @endif

        {!! Form::open(['url' => "areas/$area->id/update", 'method'=>'put']) !!}

        <div class="form-group">
            {!! Form::label('descricao', 'Descrição') !!}
            {!! Form::text('descricao', $area->descricao, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('latitude', 'Latitude') !!}
            {!! Form::text('latitude', $area->latitude, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('longitude', 'Longitude') !!}
            {!! Form::text('longitude', $area->longitude, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Editar Área', ['class'=>'btn btn-primary'])!!}
        </div>

        {!! Form::close() !!}

    </div>
@endsection
