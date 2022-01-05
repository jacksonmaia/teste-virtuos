@extends('layouts.app')

@section('content')
<div class="container">
    <table class="table">
        <a href="{{ url('cliente/new') }}">Novo cliente</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nome</th>
            <th scope="col">Tipo de pessoa</th>
            <th scope="col">Documento</th>
            <th scope="col">Telefone</th>
            <th scope="col">Status</th>
          </tr>
        </thead>
            <tbody>
            @foreach ($clientes as $cliente)
                <tr>
                    <th scope="row">{{ $cliente->id }}</th>
                    <td>{{ $cliente->nome }}</td>
                    <td>{{ $cliente->tipo }}</td>
                    <td>{{ $cliente->documento }}</td>
                    <td>{{ $cliente->telefone }}</td>
                    <td>{{ $cliente->status }}</td>
                </tr>
            @endforeach
            </tbody>
      </table>
</div>
@endsection
