@extends('layouts.app')
@section('titulo','Listagem de Contatos do Cliente '.$viewData['cliente']->getNome().' ( '.$viewData['cliente']->getCnpj().' )')
@section('conteudo')

<div class="row d-flex flex-row-reverse">
    <a href="{{ route('contatos.novo',['clienteId' => $viewData['cliente']->getId()]) }}" class="btn btn-primary ">Novo</a>
</div>
<table class="table table-hover table-sm text-nowrap">
    <thead>
      <tr>
        <th>ID</th>
        <th>Contato</th>
        <th>Telefone</th>
        <th>Email</th>                
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($viewData['contatos'] as $contato)
            <tr>
                <td class="col-1">{{ $contato->getId() }}</td>
                <td>{{ $contato->getNome() }}</td>
                <td>{{ $contato->getTelefone() }}</td>
                <td>{{ $contato->getEmail() }}</td>
                <td>
                    <div class="d-grid gap-2 d-md-flex ">
                        <button type="button" class="btn btn-primary btn-sm mr-1">
                            <a href="{{ route('contatos.editar', ['id' => $contato->getId()]) }}" class="link-light text-reset"><i class="fa fa-pen"></i></a>
                        </button>
                        <form action="{{ route('contatos.apagar', ['id' => $contato->getId()]) }}" method="POST">
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