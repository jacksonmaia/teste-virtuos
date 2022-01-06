@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <h4>LISTA DE CONTATOS:</h4>
        <a class="contato" href="{{ url('contato/new') }}">Novo contato</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Email</th>
            <th scope="col">Telefone</th>
            <th scope="col">Função</th>
            <th scope="col">Ação</th>
          </tr>
        </thead>
            <tbody>
            @foreach ($contatos as $contato)
                <tr>
                    <th scope="row">{{ $contato->id }}</th>
                    <td>{{ $contato->nome }}</td>
                    <td>{{ $contato->email }}</td>
                    <td>{{ $contato->telefone }}</td>
                    <td>{{ $contato->funcao }}</td>
                    <td>
                        <form action="delete/{{$contato->id}}" method="post">
                            @csrf
                            @method('delete')
                            <button href="contato/delete/{{$contato->id}}" class="btn btn-danger">Deletar</button></td>
                        </form>
                    </td>
                </tr>
            @endforeach
            </tbody>
      </table>
</div>
@endsection
