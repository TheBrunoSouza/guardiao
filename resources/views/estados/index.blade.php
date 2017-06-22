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

        <a href="{{route ('estados.create')}}" class="btn-sm btn-success">Novo</a>

        <h1>Estados</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Sigla</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <tbody>
                @foreach($estados as $estado)
                    <tr>
                        <td>{{$estado->nome}} </td>
                        <td>{{$estado->sigla}} </td>
                        <td>
                            <a href="{{route ('estados.edit', ['id'=>$estado->id])}}" class="btn-sm btn-success">Editar</a>
                            <a href="{{route ('estados.destroy', ['id'=>$estado->id])}}" class="btn-sm btn-danger">Remover</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection