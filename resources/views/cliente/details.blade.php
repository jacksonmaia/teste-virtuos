@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Razão social</th>
            <th scope="col">Tipo</th>
            <th scope="col">Documento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Status</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
        <tbody>
        <tr>
            <td>{{ $cliente->nome }}</td>
            <td>{{ $cliente->razao_social }}</td>
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

            <td>
                <form action="delete/{{$cliente->id}}" method="post">
                    @csrf
                    @method('delete')
                    <button href="cliente/delete/{{$cliente->id}}" class="btn btn-danger">Deletar</button></td>
                </form>
                <a class="btn btn-primary" href="{{ url('/cliente/edit', $cliente->id) }}">Editar</a>
            </td>
        </tr>
    <br>
    <table class="table">
        <h4>LISTA DE CONTATOS DO CLIENTE:</h4>
        <thead>
          <tr>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Função</th>
          </tr>
        </thead>
            <tbody>
            @foreach ($contatos as $contato)
                @if($contato->cliente_id == $cliente->id)
                    <tr>
                        <td>{{ $contato->nome }}</td>
                        <td>{{ $contato->email }}</td>
                        <td>{{ $contato->telefone }}</td>
                        <td>{{ $contato->funcao }}</td>
                    </tr>
                @endif
            @endforeach
            </tbody>
      </table>
</div>
@endsection
