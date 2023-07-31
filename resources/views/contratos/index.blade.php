@extends('layouts.app')
@section('titulo','Listagem de Contratos do Cliente '.$viewData['cliente']->getNome().' ( '.$viewData['cliente']->getCnpj().' )')
@section('conteudo')

<div class="row d-flex flex-row-reverse">
    <a href="{{ route('contratos.novo',['clienteId' => $viewData['cliente']->getId()]) }}" class="btn btn-primary ">Novo</a>
</div>
<table class="table table-hover table-sm text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Início</th>
        <th>Status</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($viewData['contratos'] as $contrato)
            <tr>
                <td class="col-1">{{ $contrato->getId() }}</td>
                <td>{{ $contrato->getInicioBR() }}</td>
                <td class="col-1">
                    @if ($contrato->getAtivo())
                        <span class="badge bg-success">Ativo</span>
                    @else
                    <span class="badge bg-danger">Inativo</span>
                    @endif
                </td>
                <td>
                    <div class="d-grid gap-2 d-md-flex ">
                        <button type="button" class="btn btn-primary btn-sm mr-1">
                            <a href="{{ route('contratos.editar', ['id' => $contrato->getId()]) }}" class="link-light text-reset"><i class="fa fa-pen"></i></a>
                        </button>
                        <form action="{{ route('contratos.apagar', ['id' => $contrato->getId()]) }}" method="POST">
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