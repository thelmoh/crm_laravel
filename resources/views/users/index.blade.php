@extends('layouts.app')
@section('titulo','Listagem de Usuários')
@section('conteudo')
<table class="table table-hover table-sm text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Usuário</th>
        <th>Email</th>
        <th>Status</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($viewData['usuarios'] as $usuario)
            <tr>
                <td class="col-1">{{ $usuario->getId() }}</td>
                <td>{{ $usuario->getName() }}</td>
                <td>{{ $usuario->getEmail() }}</td>
                <td class="col-1">
                    @if ($usuario->getAtivo())
                        <span class="badge bg-success">Ativo</span>
                    @else
                        <span class="badge bg-danger">Inativo</span>
                    @endif
                </td>
                <td>
                    <div class="d-grid gap-2 d-md-flex ">
                        @if ($usuario->getAtivo())
                        <form action="{{ route('usuario.desativar',['id' => $usuario->getId()]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm mr-1">
                                <i class="fa fa-lock"></i>
                            </button>
                        </form>
                        @else
                        <form action="{{ route('usuario.ativar', ['id' => $usuario->getId()]) }}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-unlock"></i>
                            </button>
                        </form>
                        @endif
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection