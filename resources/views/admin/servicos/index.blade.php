@extends('admin.dashboard')
 
@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Lista de Serviços</h2>
        <a href="{{route('servico.create')}}" class="btn btn-primary">Cadastrar</a>
    </div>
 
    <hr>
 
    @if (session('sucesso'))
        <div class="alert alert-success">
            {{ session('sucesso') }}
        </div>
    @endif
    @if (session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
 
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
 
                <th>Titulo</th>
                <th>Descrição</th>
                <th>Valor</th>
               
                <th>Ação</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($servicos as $servico)
            <tr>
                <td>{{$servico->id}}</td>
 
                <td>{{$servico->titulo}}</td>
                <td>{{$servico->descricao}}</td>
                <td>{{$servico->valor}}</td>
                <td>
                    <a href="{{route('servico.show', ['id'=> $servico->id])}}" class="btn btn-primary">Visualizar</a>
                    <a href="{{route('servico.edit', ['id' => $servico->id])}}" class="btn btn-secondary">Editar</a>
                    <form action="{{ route('servico.destroy', ['id' => $servico->id]) }}" method="post" style="display: inline-block">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Tem certeza que deseja excluir?')">Excluir</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection
 
 