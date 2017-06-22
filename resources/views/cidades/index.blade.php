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

        <a href="{{route ('cidades.create')}}" class="btn-sm btn-success">Novo</a>

        <h1>Cidades</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Estado</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($cidades as $cidade)
                    <tr>
                        <td>{{$cidade->nome}} </td>
                        <td>{{$cidade->estado->nome}} </td>
                        <td>
                            <a href="{{route ('cidades.edit', ['id'=>$cidade->id])}}" class="btn-sm btn-success">Editar</a>
                            <a href="{{route ('cidades.destroy', ['id'=>$cidade->id])}}" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection