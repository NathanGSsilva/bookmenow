@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Categorias</h2>
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

    <form action="{{route('categoria.update', ['id' => $categoria->id])}}" method="post">
      @csrf
      @method('PUT')
      <div class="row mb-3">
        <label for="inputName3" class="col-sm-2 col-form-label">Titulo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="inputName3" name="titulo" value='{{old('titulo', $categoria->titulo)}}'>
        </div>
      </div>
      <div class="row mb-3">
        <label for="inputEmail3" class="col-sm-2 col-form-label">imagem</label>
        <div class="col-sm-10">
          <input type="file" class="form-control" id="inputEmail3" name="imagem" value='{{old('imagem', $categoria->imagem)}}'>
        </div>
      </div>
      <div class="row mb-3">
          <label for="inputName3" class="col-sm-2 col-form-label">Descrição</label>
          <div class="col-sm-10">
            <input type="text" class="form-control" id="inputName3" name="descricao" value='{{old('descricao', $categoria->descricao)}}'>
          </div>
      </div>
      <button type="submit" class="btn btn-primary">Salvar</button>
      <a href="{{route('categoria.index')}}" class="btn btn-secondary">Cancelar</a>
    </form>

@endsection