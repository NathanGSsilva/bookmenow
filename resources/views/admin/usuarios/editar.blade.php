@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Editar Usuarios</h2>
    </div>

    <hr>

    @if ($errors->any())
        
    <div class="boxError alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)

            <li>{{ $error }}</li>
                
            @endforeach
        </ul>
    </div>
        
    @endif

    <div class="container">

        <form action="{{ route('usuario.update', ['id' => $usuario->id ]) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome', $usuario->nome) }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value=" {{ old('email', $usuario->email) }}">
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password"></input>
            </div>
            <div class="form-group">
                <label for="password_confirm">Confirmar senha:</label>
                <input type="password" class="form-control" id="password_confirm" name="password_confirm" ></input>
            </div>
            <p class="alert alert-info">mantenha o campo vazio, caso deseja manter a senha atual</p>
            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            <a href="{{ route('usuario.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>
    </div>

@endsection