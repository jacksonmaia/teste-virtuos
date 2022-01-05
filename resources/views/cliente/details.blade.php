@extends('layouts.app')

@section('content')
<div class="container">
    <tr>
        <th scope="row">{{ $cliente->id }}</th>
        <td>{{ $cliente->nome }}</td>
        <td>{{ $cliente->tipo }}</td>
        <td>{{ $cliente->documento }}</td>
        <td>{{ $cliente->telefone }}</td>
        <td>{{ $cliente->status }}</td>
    </tr>
    <form action="delete/{{$cliente->id}}" method="post">
        @csrf
        @method('delete')
        <button href="cliente/delete/{{$cliente->id}}" class="btn btn-danger">Deletar</button></td>
    </form>
    <a class="btn btn-primary" href="{{ url('/cliente/edit', $cliente->id) }}">Editar</a>

    <table class="table">
        <a href="{{ url('contato/new') }}">Novo contato</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Função</th>
          </tr>
        </thead>
            <tbody>
            @foreach ($contatos as $contato)
                <tr>
                    <th scope="row">{{ $contato->id }}</th>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->Função }}</td>
                </tr>
            @endforeach
            </tbody>
      </table>
</div>
@endsection
