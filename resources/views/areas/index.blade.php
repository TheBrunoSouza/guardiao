@extends('app')

<?php
/**
 * Created by PhpStorm.
 * User: Bruno Souza
 * Date: 11/05/2017
 * Time: 20:45
 */
?>

@section('content')
    <div class="container">

        <a href="{{route ('areas.create')}}" class="btn-sm btn-success">Novo</a>

        <h1>Áreas</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Descrição</th>
                <th>Latitude</th>
                <th>Longitude</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($areas as $area)
                <tr>
                    <td>{{$area->descricao}} </td>
                    <td>{{$area->latitude}} </td>
                    <td>{{$area->longitude}} </td>
                    <td>
                        <a href="{{route ('areas.edit', ['id'=>$area->id])}}" class="btn-sm btn-success">Editar</a>
                        <a href="{{route ('areas.destroy', ['id'=>$area->id])}}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection