@extends('layouts.app')

@section('content')
<div class="container">
    <form method="POST" action="{{ url('/cliente/update', $cliente->id) }}" class="row g-3">
        @csrf
        <div class="col-6">
            <label for="inputAddress" class="form-label">Razão Social</label>
            <input type="text" name="razao_social" class="form-control" id="inputAddress" value="{{ $cliente->razao }}">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" id="inputAddress" value="{{ $cliente->nome }}">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Tipo</label>
            <select name="tipo" class="form-control">
                @if ($cliente->tipo == 1)
                    <option selected value="{{ $cliente->tipo }}">Pessoa Fisica</option>
                    <option value="2">Pessoa Juridica</option>
                @elseif ($cliente->tipo == 2)
                    <option value="1">Pessoa Fisica</option>
                    <option selected value="{{ $cliente->tipo }}">Pessoa Juridica</option>
                @endif
          </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Documento</label>
            <input type="number" name="documento" class="form-control" value="{{ $cliente->documento }}">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input type="email" name="email" class="form-control" value="{{ $cliente->email }}">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Telefone</label>
            <input type="number" name="telefone" class="form-control" value="{{ $cliente->telefone }}" >
          </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Endereço</label>
          <input type="text" name="endereco" class="form-control" id="inputAddress2" value="{{ $cliente->endereco }}" >
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Estado</label>
          <input type="text" name="estado" class="form-control" value="{{ $cliente->estado }}">
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label">Cidade</label>
            <input type="text" name="cidade" class="form-control" value="{{ $cliente->cidade }}">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Status</label>
            <select name="status" class="form-control">

                    @if ($cliente->status == 1)
                        <option selected value="{{ $cliente->status }}">Ativo</option>
                        <option value="2">Inativo</option>
                        <option value="3">Prospecto</option>
                    @elseif ($cliente->status == 2)
                        <option value="1">Ativo</option>
                        <option selected value="{{ $cliente->status }}">Inativo</option>
                        <option value="3">Prospecto</option>
                    @elseif ($cliente->status == 3)
                        <option value="1">Ativo</option>
                        <option value="2">Inativo</option>
                        <option selected value="{{ $cliente->status }}">Prospecto</option>
                    @endif
              </select>
        </div>

        <div class="col-12 bot-cadastrar">
          <button type="submit" class="btn btn-primary">Atualizar</button>
        </div>
      </form>

</div>
<style>
    .bot-cadastrar{
        margin-top: 2em;
    }
</style>
@endsection
