@extends('layouts.app')
@section('titulo', $viewData['titulo'])
@section('conteudo')

<div class="row d-flex flex-row-reverse">
    <a href="{{ route('observacoes.novo',['contratoId' => $viewData['contrato']->getId()]) }}" class="btn btn-primary ">Nova</a>
</div>
<table class="table table-hover table-sm text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Observação</th>
        <th>Prazo</th>
        <th>Tarefa</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($viewData['observacoes'] as $observacao)
            <tr>
                <td class="col-1">{{ $observacao->getId() }}</td>
                <td><pre>{{ $observacao->getInicioObservacao() }}</pre></td>
                <td>{{ $observacao->getPrazoBR() }}</td>
                <td>{{ $observacao->getTarefa() }}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex ">
                        <button type="button" class="btn btn-primary btn-sm mr-1">
                            <a href="{{ route('observacoes.editar', ['id' => $observacao->getId()]) }}" class="link-light text-reset"><i class="fa fa-pen"></i></a>
                        </button>
                        <form action="{{ route('observacoes.apagar', ['id' => $observacao->getId()]) }}" method="POST">
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
