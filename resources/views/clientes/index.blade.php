@extends('layouts.app')
@section('titulo','Listagem de Clientes')
@section('conteudo')
<div class="row d-flex flex-row-reverse">
    <a href="#" class="btn btn-primary ">Novo</a>
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
                <td class="d-flex flex-row">
                    <button type="button" class="btn btn-primary btn-sm col-3 mr-1">
                        <i class="fa fa-pen"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm col-3">
                        <i class="fa fa-eraser"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection