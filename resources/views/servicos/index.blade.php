@extends('adminlte::page')

@section('Lista de Serviços', 'Dashboard')

@section('content_header')
<h1>Lista de Serviços</h1>
@stop

@section('content')
<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Ações</th>
        </tr>
    </thead>
    <tbody>

        @forelse ($servicos as $servico)
        <tr>
            <th>{{$servico->id}}</th>
            <td>{{$servico->nome}}</td>
            <td>
                <a href="{{route('servicos.edit',$servico)}}" class=" btn btn-primary">Atualizar</a>
            </td>
        </tr>
        @empty
            <th></th>
            <th>Nenhum registro encontrado</th>
            <th></th>
        @endforelse
    </tbody>
</table>
<div class="d-flex justify-content-center">
    {{$servicos->links()}}
</div>

<div class="float-right">
    <a href="{{route('servicos.create')}}" class="btn btn-success">Novo Serviçço</a>
</div>
@stop
