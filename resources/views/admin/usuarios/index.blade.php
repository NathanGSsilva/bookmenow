@extends('admin.dashboard')

@section('conteudo')
<div class="d-flex justify-content-between mt-3">
    <h2>Lista de Usuarios</h2>
    <a href="{{ route('usuario.create') }}" class="btn btn-primary">Cadastrar</a>
</div>

<hr>

@if (@session('sucesso'))

<div class="alert alert-success">

    {{session('sucesso')}}

</div>
@endif

@if (@session('error'))

<div class="alert alert-error">

    {{session('error')}}

</div>
@endif


<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>E-mail</th>
            <th>Ação</th>
        </tr>
    </thead>
    <tbody>

        @foreach ($usuarios as $usuario)

        <tr>
            <td>{{ $usuario -> id }}</td>

            <td>{{ $usuario -> nome }}</td>
            <td>{{ $usuario -> email }}</td>
            <td>
                <a href="{{ route('usuario.show',['id'=> $usuario -> id]) }}" class="btn btn-primary">Visualizar</a>
                <a href="{{ route('usuario.edit', ['id' => $usuario -> id]) }}" class="btn btn-secondary">Editar</a>


                <form action="{{ route('usuario.destroy', ['id' => $usuario -> id]) }}" style="display: inline-block" method="post">
                    </style>
                    @csrf
                    @method('delete')
                    <button type="submit" class="btn btn-danger" onclick="return confirm ('Tem certeza que deseja excluir ?')">Excluir</button>
                </form>
            </td>
        </tr>

        @endforeach

    </tbody>
</table>

<div class="d-flex justify-content-center">
        {{ $usuarios->links('pagination::bootstrap-4') }}
    </div>
@endsection