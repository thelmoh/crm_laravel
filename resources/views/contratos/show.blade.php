@extends('layouts.app')
@section('titulo', 'Detalhes do Contrato')
@section('conteudo')
    <div class="row">
        <div class="col-md-1">
            <label for="id" class="form-label">ID</label>
            <input type="text" class="form-control" id="id" name="id" value="{{ $viewData['contrato']->getId() }}" readonly>
        </div>
        <div class="col-md-9">
            <label for="descricao" class="form-label">Descrição</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $viewData['contrato']->getDescricao() }}" readonly>
        </div>
        <div class="col-md-2">
            <label for="inicio" class="form-label">Início</label>
            <input type="date" class="form-control" id="inicio" name="inicio" value="{{ $viewData['contrato']->getInicio() }}" readonly>
        </div>
    </div>
    <div class="row my-3">

        <div class="row col-12 d-flex flex-row-reverse">
            <a href="{{ route('produtos_contratos.create', ["contratoId" => $viewData['contrato']->getId()]) }}" class="btn btn-primary col-1">Novo</a>
            <h3 class="col-11">Produtos do Contrato</h3>
        </div>

        <table class="table table-hover table-sm text-nowrap my-2">
            <thead>
              <tr>
                <th>ID</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor</th>
                <th>Ações</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($viewData['produtos'] as $produto)
                    <tr>
                        <td class="col-1">{{ $produto->id }}</td>
                        <td>{{ $produto->descricao }}</td>
                        <td>{{ $produto->pivot->quantidade }}</td>
                        <td>{{ number_format($produto->pivot->valor, 2, ",", ".") }}</td>
                        <td>
                            <div class="d-grid gap-2 d-md-flex ">
                                <form action="{{ route('produtos_contratos.apagar', ['id' => $produto->pivot->id]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm mr-1">
                                        <i class="fa fa-eraser"></i>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
          </table>
    </div>
@endsection
@section('javascript')
<script type="text/javascript">
    $(document).ready(function(){
        $('.date').mask('11/11/1111');
        $('.time').mask('00:00:00');
        $('.date_time').mask('00/00/0000 00:00:00');
        $('.cep').mask('00000-000');
        $('.phone').mask('00000-0000');
        $('.phone_with_ddd').mask('(00) 00000-0000');
        $('.cpf').mask('000.000.000-00');
        $('.cnpj').mask('00.000.000/0000-00');
    });
</script>
@endsection