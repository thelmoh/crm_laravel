@extends('layouts.app')
@section('titulo','Listagem de Clientes')
@section('conteudo')
<div class="row d-flex flex-row-reverse">
    <a href="{{ route('clientes.novo') }}" class="btn btn-primary ">Novo</a>
</div>
<table class="table table-hover table-sm text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Cliente</th>
        <th>CNPJ</th>
        <th>Status</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($viewData['clientes'] as $cliente)
            <tr>
                <td class="col-1">{{ $cliente->getId() }}</td>
                <td>{{ $cliente->getNome() }}</td>
                <td>{{ $cliente->getCnpj() }}</td>
                <td class="col-1">
                    @if ($cliente->getAtivo())
                        <span class="badge bg-success">Ativo</span>
                    @else
                    <span class="badge bg-danger">Inativo</span>
                    @endif
                </td>
                <td>
                    <div class="d-grid gap-2 d-md-flex ">
                        <button type="button" class="btn btn-primary btn-sm mr-1">
                            <a href="{{ route('clientes.editar', ['id' => $cliente->getId()]) }}" class="link-light text-reset"><i class="fa fa-pen"></i></a>
                        </button>
                        <form action="{{ route('clientes.apagar', ['id' => $cliente->getId()]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">
                                <i class="fa fa-eraser"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection