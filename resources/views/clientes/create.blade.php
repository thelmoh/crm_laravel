@extends('layouts.app')
@section('titulo', 'Novo Cliente')
@section('conteudo')
    <form class="row g-3" action="{{ route('clientes.store') }}" method="POST">
        @csrf
        <div class="col-md-5">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome">
        </div>
        <div class="col-md-2">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" class="form-control cnpj" id="cnpj" name="cnpj">
        </div>
        <div class="col-md-5">
            <label for="responsavel" class="form-label">Responsável</label>
            <input type="text" class="form-control" id="responsavel" name="responsavel">
        </div>
        <div class="col-md-4">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco">
        </div>
        <div class="col-md-1">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero">
        </div>
        <div class="col-md-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro">
        </div>
        <div class="col-md-4">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento">
        </div>
        <div class="col-md-4">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade">
        </div>
        <div class="col-md-2">
            <label for="uf" class="form-label">UF</label>
            <select id="uf" class="form-control form-select" name="uf">
                <option value="AC">AC</option>
                <option value="AL">AL</option>
                <option value="AP">AP</option>
                <option value="AM">AM</option>
                <option value="BA">BA</option>
                <option value="CE">CE</option>
                <option value="DF">DF</option>
                <option value="ES">ES</option>
                <option value="GO">GO</option>
                <option value="MA">MA</option>
                <option value="MT">MT</option>
                <option value="MS">MS</option>
                <option value="MG">MG</option>
                <option value="PA">PA</option>
                <option value="PB">PB</option>
                <option value="PR">PR</option>
                <option value="PE">PE</option>
                <option value="PI">PI</option>
                <option value="RJ">RJ</option>
                <option value="RN">RN</option>
                <option value="RS">RS</option>
                <option value="RO">RO</option>
                <option value="RR">RR</option>
                <option value="SC">SC</option>
                <option value="SP">SP</option>
                <option value="SE">SE</option>
                <option value="TO">TO</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control cep" id="cep" name="cep">
        </div>
        <div class="col-md-2">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control phone_with_ddd" id="telefone" name="telefone">
        </div>
        <div class="col-md-2">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control phone_with_ddd" id="celular" name="celular">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email">
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