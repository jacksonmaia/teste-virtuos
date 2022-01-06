@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <a href="{{ url('cliente/new') }}">Novo cliente</a>
        <a class="contato" href="{{ url('contato/list') }}">Contatos</a>
        <h4>LISTA DE CONTATOS DO CLIENTE:</h4>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo de pessoa</th>
            <th scope="col">Documento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Status</th>
            <th scope="col">Ver</th>
          </tr>
        </thead>
            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>{{ $cliente->nome }}</td>
                    @if ($cliente->tipo == 1)
                        <td>Pessoa fisica</td>
                    @else
                        <td>Pessoa juridica</td>
                    @endif
                    <td>{{ $cliente->documento }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    @if ($cliente->status == 1)
                        <td>Ativo</td>
                    @elseif ($cliente->status == 2)
                        <td>Inativo</td>
                    @else
                        <td>Prospecto</td>
                    @endif
                    <td><a href="{{ url('/cliente', $cliente->id) }}">Ver</a></td>
                </tr>
            @endforeach
            </tbody>
      </table>
</div>
<style>
    .contato{
        float: right;
    }
</style>
@endsection
