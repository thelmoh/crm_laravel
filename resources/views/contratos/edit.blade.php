@extends('layouts.app')
@section('titulo', 'Editar Contrato')
@section('conteudo')
    <form class="row g-3" action="{{ route('contratos.update',['id' => $viewData['contrato']->getId()]) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="hidden" name="cliente_id" id="cliente_id" value="{{ $viewData['contrato']->getClienteId() }}">
        <div class="col-md-2">
            <label for="inicio" class="form-label">Início</label>
            <input type="date" class="form-control" id="inicio" name="inicio" value="{{ $viewData['contrato']->getInicio() }}">
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