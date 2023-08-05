@extends('layouts.app')
@section('titulo', 'Nova Observação')
@section('conteudo')
<div class="row">
    <h3>Contrato: {{ $viewData['contrato']->getId() }} => {{ $viewData['cliente']->getNome() }} ({{ $viewData['cliente']->getCnpj() }})</h3>
</div>
    <form class="row g-3" action="{{ route('observacoes.store') }}" method="POST">
        @csrf
        <input type="hidden" name="contrato_id" id="contrato_id" value="{{ $viewData['contrato']->getId() }}">
        <div class="col-md-12">
            <label for="observacao" class="form-label">Observação</label>
            <textarea rows="5" name="observacao" id="observacao" class="form-control"></textarea>
        </div>
        <div class="col-md-2">
            <label for="prazo" class="form-label">Prazo</label>
            <input type="date" class="form-control" id="prazo" name="prazo">
        </div>
        <div class="col-md-3">
            <label for="tarefa" class="form-label">N° Tarefa</label>
            <input type="text" class="form-control" id="tarefa" name="tarefa">
        </div>
        <div class="col-md-7">
            <label for="url_tarefa" class="form-label">End. Tarefa</label>
            <input type="url_tarefa" class="form-control" id="url_tarefa" name="url_tarefa">
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