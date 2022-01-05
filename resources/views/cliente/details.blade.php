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
        <button href="delete/{{$cliente->id}}" class="btn btn-danger">Deletar</button></td>
    </form>
</div>
@endsection
