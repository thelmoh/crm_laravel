@extends('layouts.app')
@section('titulo', 'Novo Contato')
@section('conteudo')
<div class="row">
    <h3>Cliente: {{ $viewData['cliente']->getNome() }}({{ $viewData['cliente']->getCnpj() }})</h3>
</div>
    <form class="row g-3" action="{{ route('contatos.store') }}" method="POST">
        @csrf
        <input type="hidden" name="cliente_id" id="cliente_id" value="{{ $viewData['cliente']->getId() }}">
        <div class="col-md-4">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="col-md-2">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control phone_with_ddd" id="telefone" name="telefone">
        </div>
        <div class="col-md-4">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email">
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
    });
</script>
@endsection