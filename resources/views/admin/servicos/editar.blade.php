@extends('admin.dashboard')

@section('conteudo')
<div class="d-flex justify-content-between mt-3">
  <h2>Editar Serviços</h2>
</div>

<hr>

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

<form action="{{route('servico.update', ['id' => $servico->id])}}" method="post">
  @csrf
  @method('PUT')



  <div class="row mb-3">
    <label for="Titulo" class="col-sm-2 col-form-label">Titulo</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="titulo" name="titulo" value="{{old('titulo', $servico->titulo)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Valor" class="col-sm-2 col-form-label">Valor</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="valor" name="valor" value="{{old('valor', $servico->valor)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Telefone" class="col-sm-2 col-form-label">Telefone</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="telefone" name="telefone" value="{{old('telefone', $servico->telefone)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Celular" class="col-sm-2 col-form-label">Celular</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="celular" name="celular" value="{{old('celular', $servico->celular)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Endereco" class="col-sm-2 col-form-label">Endereço</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="endereco" name="endereco" value="{{old('endereco', $servico->endereco)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Complemento" class="col-sm-2 col-form-label">Complemento</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="complemento" name="complemento" value="{{old('complemento', $servico->complemento)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Bairro" class="col-sm-2 col-form-label">Bairro</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="bairro" name="bairro" value="{{old('bairro', $servico->bairro)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Estado" class="col-sm-2 col-form-label">Estado</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="estado" name="estado" value="{{old('estado', $servico->estado)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="Cep" class="col-sm-2 col-form-label">Cep</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="cep" name="cep" value="{{old('cep', $servico->cep)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="inputName3" class="col-sm-2 col-form-label">Descrição</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputName3" name="descricao" value="{{old('descricao', $servico->descricao)}}">
    </div>
  </div>

  <div class="row mb-3">
    <label for="foto" class="col-sm-2 col-form-label">Imagem</label>
    <div class="col-sm-10">
      <input type="file" class="form-control" id="foto" name="foto[]" multiple>
    </div>
  </div>

  <button type="submit" class="btn btn-primary">Salvar</button>
  <a href="{{route('servico.index')}}" class="btn btn-secondary">Cancelar</a>
</form>

@endsection