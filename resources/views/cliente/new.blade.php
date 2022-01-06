@extends('layouts.app')
@if (session('alert'))
    <div class="alert alert-danger">
        {{ session('alert') }}
    </div>
@endif
@section('content')
<div class="container">
    <form method="POST" action="{{ url('/cliente/save') }}" class="row g-3">
        @csrf
        <div class="col-6">
            <label for="inputAddress" class="form-label">Razão Social</label>
            <input required name="razao_social" type="text" class="form-control" id="inputAddress"  placeholder="Razão social">
        </div>
        <div class="col-6">
            <label for="inputAddress" class="form-label">Nome</label>
            <input required name="nome" type="text" class="form-control" id="inputAddress" placeholder="Qual seu nome?">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Tipo</label>
            <select required name="tipo" class="form-control">
                <option selected value="1">Pessoa fisica</option>
                <option value="2">Pessoa Juridica</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Documento</label>
            <input required name="documento" type="number" class="form-control" placeholder="Digite seu CPF/CNPJ">
        </div>
        <div class="col-md-6">
          <label for="inputEmail4" class="form-label">Email</label>
          <input required name="email" type="email" class="form-control" placeholder="Coloque seu email">
        </div>
        <div class="col-md-6">
            <label for="inputEmail4" class="form-label">Telefone</label>
            <input required name="telefone" type="number" class="form-control" placeholder="Qual o seu Telefone? Apenas números" >
          </div>
        <div class="col-12">
          <label for="inputAddress2" class="form-label">Endereço</label>
          <input required name="endereco" type="text" class="form-control" id="inputAddress2" placeholder="Qual o seu endereço? Ex: Rua, número - bairro" >
        </div>
        <div class="col-md-6">
          <label for="inputCity" class="form-label">Estado</label>
          <input required name="estado" type="text" class="form-control" placeholder="De qual estado é?">
        </div>
        <div class="col-md-6">
            <label for="inputZip" class="form-label">Cidade</label>
            <input required name="cidade" type="text" class="form-control" placeholder="De qual cidade você?">
        </div>
        <div class="col-md-2">
          <label for="inputZip" class="form-label">Status</label>
            <select required name="status" class="form-control">
                <option selected value="1">Ativo</option>
                <option value="2">Inativo</option>
                <option value="3">Prospecto</option>
            </select>
        </div>
        <div class="col-12 bot-cadastrar">
          <button type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
      </form>
</div>
<style>
    .bot-cadastrar{
        margin-top: 2em;
    }
</style>
@endsection
