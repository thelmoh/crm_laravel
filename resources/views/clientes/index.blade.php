@extends('layouts.app')
@section('titulo','Listagem de Clientes')
@section('conteudo')
<table class="table table-hover text-nowrap">
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
                <td>{{ $cliente->getId() }}</td>
                <td>{{ $cliente->getName() }}</td>
                <td>{{ $cliente->getCnpj() }}</td>
                <td><span class="tag tag-success">{{ $cliente->getAtivo() }}</span></td>
                <td>
                    <button type="button" class="btn btn-primary btn-block btn-sm">
                        <i class="fa fa-pen"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-block btn-sm">
                        <i class="fa fa-eraser"></i>
                    </button>
                </td>
            </tr>
        @endforeach
    </tbody>
  </table>
@endsection