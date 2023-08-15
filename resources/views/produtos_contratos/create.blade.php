@extends('layouts.app')
@section('titulo', 'Adicionar Produto ao Contrato')
@section('conteudo')
<div class="row">
    <h3>Contrato: {{ $viewData['contrato']->getId() }} => {{ $viewData['contrato']->cliente->getNome() }} ({{ $viewData['contrato']->cliente->getCnpj() }})</h3>
</div>
    <form class="row g-3" action="{{ route('produtos_contratos.store') }}" method="POST">
        @csrf
        <input type="hidden" name="contrato_id" id="contrato_id" value="{{ $viewData['contrato']->getId() }}">
        <div class="col-md-6">
            <label for="produto" class="form-label">Produto</label>
            <select name="produto_id" id="produto_id" class="form-control form-select">
                @foreach ($viewData["produtos"] as $produto)
                    <option value="{{ $produto->getId()}}">{{ $produto->getdescricao()}} </option>
                @endforeach
            </select>
        </div>
        <div class="col-md-2">
            <label for="quantidade" class="form-label">Quantidade</label>
            <input type="number" class="form-control" id="quantidade" name="quantidade">
        </div>
        <div class="col-md-3">
            <label for="valor" class="form-label">Valor</label>
            <input type="text" class="form-control money" id="valor" name="valor" data-thousands="." data-decimal=",">
        </div>
        <div class="col-12 mt-5">
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
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
        $('.money').maskMoney();
    });
</script>
@endsection