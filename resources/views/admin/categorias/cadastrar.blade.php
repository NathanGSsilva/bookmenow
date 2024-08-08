@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Categorias</h2>
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

    <form action="{{route('categoria.store')}}" method="post">
        @csrf <!-- gera campo de segurança -->
        <div class="row mb-3">
          <label for="inputName3" class="col-sm-2 col-form-label">Titulo</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName3" name="titulo" value="{{old('titulo')}}">
          </div>
        </div>
        <div class="row mb-3">
          <label for="inputEmail3" class="col-sm-2 col-form-label">imagem</label>
          <div class="col-sm-10">
            <input type="file" class="form-control" id="inputEmail3" name="imagem" value="{{old('imagem')}}">
          </div>
        </div>
        <div class="row mb-3">
            <label for="inputName3" class="col-sm-2 col-form-label">Descrição</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="inputName3" name="descricao" value="{{old('descricao')}}">
            </div>
        </div>
        <button type="submit" class="btn btn-primary mt-3">Salvar</button>
        <a href="{{route('categoria.index')}}" class="btn btn-secondary mt-3">Cancelar</a>
    </form>

@endsection