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

        <a href="{{route ('clientes.create')}}" class="btn-sm btn-success">Novo</a>

        <h1>Clientes</h1>

        <table class="table table-striped table-bordered table-hover">
            <thead>
            <tr>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>CPF</th>
                <th>Ação</th>
            </tr>
            </thead>
            <tbody>
            @foreach($clientes as $cliente)
                <tr>
                    <td>{{$cliente->nome}} </td>
                    <td>{{$cliente->sobrenome}} </td>
                    <td>{{$cliente->cpf}} </td>
                    <td>
                        <a href="{{route ('clientes.edit', ['id'=>$cliente->id])}}" class="btn-sm btn-success">Editar</a>
                        <a href="{{route ('clientes.destroy', ['id'=>$cliente->id])}}" class="btn-sm btn-danger">Remover</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection