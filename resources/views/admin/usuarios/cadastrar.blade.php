@extends('admin.dashboard')

@section('conteudo')
    <div class="d-flex justify-content-between mt-3">
        <h2>Cadastrar Usuarios</h2>
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

        <form action="{{ route('usuario.store') }}" method="POST">
        @csrf <!--  gera campo de segurança -->
            <div class="form-group">
                <label for="name">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" value="{{ old('nome') }}">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" >
            </div>
            <div class="form-group">
                <label for="password">Senha:</label>
                <input type="password" class="form-control" id="password" name="password" ></input>
            </div>
            <div class="form-group">
                <label for="password_confirmation">Confirmar senha:</label>
                <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" ></input>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Salvar</button>
            <a href="{{ route('usuario.index') }}" class="btn btn-secondary mt-3">Cancelar</a>
        </form>

    </div>

@endsection
