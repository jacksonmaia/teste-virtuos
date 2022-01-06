@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ url('/contato/save') }}" class="row g-3">
        @csrf

        <div class="col-6">
            <label for="inputAddress" class="form-label">Nome</label>
            <input required name="nome" type="text" class="form-control" id="inputAddress" placeholder="Qual o nome do contato?">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input required name="email" type="email" class="form-control" placeholder="Coloque o email">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Telefone</label>
            <input required name="telefone" type="number" class="form-control" placeholder="Qual o seu Telefone? Apenas números" >
          </div>
        <div class="col-6">
          <label for="inputAddress2" class="form-label">Função</label>
          <input required name="funcao" type="text" class="form-control" placeholder="Qual a função na empresa" >
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label">Alocar no cliente:</label>
              <select required name="cliente_id" class="form-control">
                @foreach ($clientes as $cliente)
                  <option value="{{ $cliente->id }}">{{ $cliente->razao_social }} - {{ $cliente->nome }}</option>
                @endforeach
              </select>
        </div>
        <div class="col-12 bot-cadastrar">
          <button type="submit" class="btn btn-primary">Cadastrar contato</button>
        </div>
      </form>
</div>
<style>
    .bot-cadastrar{
        margin-top: 2em
    }
</style>
@endsection
