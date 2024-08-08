@extends('admin.dashboard')

@section('conteudo')
<div class="d-flex justify-content-between mt-3">
  <h2>Cadastrar Serviços</h2>
</div>
<br>

@if ($errors->any())
<div class="boxError alert alert-danger">
  <ul>
    @foreach ($errors->all() as $erro)

    <li>{{$erro}}</li>
    @endforeach

  </ul>
</div>
@endif

<hr>

<form action="{{route('servico.store')}}" method="post" enctype="multipart/form-data">

  @csrf <!-- gera campo de segurança -->

  <div class="form-group">
    <label for="usuario_id">Usuario</label>
    <select name="usuario_id" id="usuario_id" class="form-control">
      <option value="1">Nathan</option>
      <option value="2">Leonardomartinhao</option>
    </select>
  </div>

  <div class="form-group">
    <label for="categoria_id">Categoria</label>
    <select name="categoria_id" id="categoria_id" class="form-control">
      <option value="1">DEV</option>
      <option value="2">Pedreiro</option>
    </select>
  </div>

  <div class="row mb-3">
    <label for="Titulo" class="col-sm-2 col-form-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Valor" class="col-sm-2 col-form-label">Valor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="valor" name="valor" value="{{old('valor')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Telefone" class="col-sm-2 col-form-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telefone" name="telefone" value="{{old('telefone')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Celular" class="col-sm-2 col-form-label">Celular</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="celular" name="celular" value="{{old('celular')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Endereco" class="col-sm-2 col-form-label">Endereço</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="endereco" name="endereco" value="{{old('endereco')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Numero" class="col-sm-2 col-form-label">Numero</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="numero" name="numero" value="{{old('numero')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Complemento" class="col-sm-2 col-form-label">Complemento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="complemento" name="complemento" value="{{old('complemento')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Bairro" class="col-sm-2 col-form-label">Bairro</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bairro" name="bairro" value="{{old('bairro')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Cidade" class="col-sm-2 col-form-label">Cidade</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cidade" name="cidade" value="{{old('cidade')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Estado" class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="estado" name="estado" value="{{old('estado')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Cep" class="col-sm-2 col-form-label">Cep</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cep" name="cep" value="{{old('cep')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Descrição</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="descricao" value="{{old('descricao')}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="foto" class="col-sm-2 col-form-label">Imagem</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="foto" name="foto[]" multiple>
    </div>
  </div>

  <button type="submit" class="btn btn-primary mt-3">Salvar</button>
  <a href="{{route('servico.index')}}" class="btn btn-secondary mt-3">Cancelar</a>
</form>

@endsection