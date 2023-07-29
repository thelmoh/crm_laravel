@extends('layouts.app')
@section('titulo', 'Editar Produto')
@section('conteudo')
    <form class="row g-3" action="{{ route('produtos.update', ['id' => $viewData['produto']->getId()]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-5">
            <label for="descricao" class="form-label">Produto</label>
            <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $viewData['produto']->getDescricao() }}">
        </div>
        <div class="col-md-2">
            <label for="preco_padrao" class="form-label">Preço</label>
            <input type="text" class="form-control money" id="preco_padrao" name="preco_padrao" value="{{ $viewData['produto']->getPrecoPadrao() }}" data-thousands="." data-decimal=",">
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