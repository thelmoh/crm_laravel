@extends('layouts.app')
@section('titulo', 'Editar Cliente')
@section('conteudo')
    <form class="row g-3" action="{{ route('clientes.update', ['id' => $viewData['cliente']->getId()]) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="col-md-5">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" value="{{ $viewData['cliente']->getNome() }}">
        </div>
        <div class="col-md-2">
            <label for="cnpj" class="form-label">CNPJ</label>
            <input type="text" class="form-control cnpj" id="cnpj" name="cnpj" value="{{ $viewData['cliente']->getCnpj() }}">
        </div>
        <div class="col-md-5">
            <label for="responsavel" class="form-label">Responsável</label>
            <input type="text" class="form-control" id="responsavel" name="responsavel" value="{{ $viewData['cliente']->getResponsavel() }}">
        </div>
        <div class="col-md-4">
            <label for="endereco" class="form-label">Endereço</label>
            <input type="text" class="form-control" id="endereco" name="endereco" value="{{ $viewData['cliente']->getEndereco() }}">
        </div>
        <div class="col-md-1">
            <label for="numero" class="form-label">Número</label>
            <input type="text" class="form-control" id="numero" name="numero" value="{{ $viewData['cliente']->getNumero() }}">
        </div>
        <div class="col-md-3">
            <label for="bairro" class="form-label">Bairro</label>
            <input type="text" class="form-control" id="bairro" name="bairro" value="{{ $viewData['cliente']->getBairro() }}">
        </div>
        <div class="col-md-4">
            <label for="complemento" class="form-label">Complemento</label>
            <input type="text" class="form-control" id="complemento" name="complemento" value="{{ $viewData['cliente']->getComplemento() }}">
        </div>
        <div class="col-md-4">
            <label for="cidade" class="form-label">Cidade</label>
            <input type="text" class="form-control" id="cidade" name="cidade" value="{{ $viewData['cliente']->getCidade() }}">
        </div>
        <div class="col-md-2">
            <label for="uf" class="form-label">UF</label>
            <select id="uf" class="form-control form-select" name="uf">
                <option value="AC" @if ($viewData['cliente']->getUf()=="AC") selected='selected' @endif >AC</option>
                <option value="AL" @if ($viewData['cliente']->getUf()=="AL") selected='selected' @endif >AL</option>
                <option value="AP" @if ($viewData['cliente']->getUf()=="AP") selected='selected' @endif >AP</option>
                <option value="AM" @if ($viewData['cliente']->getUf()=="AM") selected='selected' @endif >AM</option>
                <option value="BA" @if ($viewData['cliente']->getUf()=="BA") selected='selected' @endif >BA</option>
                <option value="CE" @if ($viewData['cliente']->getUf()=="CE") selected='selected' @endif >CE</option>
                <option value="DF" @if ($viewData['cliente']->getUf()=="DF") selected='selected' @endif >DF</option>
                <option value="ES" @if ($viewData['cliente']->getUf()=="ES") selected='selected' @endif >ES</option>
                <option value="GO" @if ($viewData['cliente']->getUf()=="GO") selected='selected' @endif >GO</option>
                <option value="MA" @if ($viewData['cliente']->getUf()=="MA") selected='selected' @endif >MA</option>
                <option value="MT" @if ($viewData['cliente']->getUf()=="MT") selected='selected' @endif >MT</option>
                <option value="MS" @if ($viewData['cliente']->getUf()=="MS") selected='selected' @endif >MS</option>
                <option value="MG" @if ($viewData['cliente']->getUf()=="MG") selected='selected' @endif >MG</option>
                <option value="PA" @if ($viewData['cliente']->getUf()=="PA") selected='selected' @endif >PA</option>
                <option value="PB" @if ($viewData['cliente']->getUf()=="PB") selected='selected' @endif >PB</option>
                <option value="PR" @if ($viewData['cliente']->getUf()=="PR") selected='selected' @endif >PR</option>
                <option value="PE" @if ($viewData['cliente']->getUf()=="PE") selected='selected' @endif >PE</option>
                <option value="PI" @if ($viewData['cliente']->getUf()=="PI") selected='selected' @endif >PI</option>
                <option value="RJ" @if ($viewData['cliente']->getUf()=="RJ") selected='selected' @endif >RJ</option>
                <option value="RN" @if ($viewData['cliente']->getUf()=="RN") selected='selected' @endif >RN</option>
                <option value="RS" @if ($viewData['cliente']->getUf()=="RS") selected='selected' @endif >RS</option>
                <option value="RO" @if ($viewData['cliente']->getUf()=="RO") selected='selected' @endif >RO</option>
                <option value="RR" @if ($viewData['cliente']->getUf()=="RR") selected='selected' @endif >RR</option>
                <option value="SC" @if ($viewData['cliente']->getUf()=="SC") selected='selected' @endif >SC</option>
                <option value="SP" @if ($viewData['cliente']->getUf()=="SP") selected='selected' @endif >SP</option>
                <option value="SE" @if ($viewData['cliente']->getUf()=="SE") selected='selected' @endif >SE</option>
                <option value="TO" @if ($viewData['cliente']->getUf()=="TO") selected='selected' @endif >TO</option>
            </select>
        </div>
        <div class="col-md-2">
            <label for="cep" class="form-label">CEP</label>
            <input type="text" class="form-control cep" id="cep" name="cep"  value="{{ $viewData['cliente']->getCep() }}">
        </div>
        <div class="col-md-2">
            <label for="telefone" class="form-label">Telefone</label>
            <input type="text" class="form-control phone_with_ddd" id="telefone" name="telefone"  value="{{ $viewData['cliente']->getTelefone() }}">
        </div>
        <div class="col-md-2">
            <label for="celular" class="form-label">Celular</label>
            <input type="text" class="form-control phone_with_ddd" id="celular" name="celular" value="{{ $viewData['cliente']->getCelular() }}">
        </div>
        <div class="col-md-6">
            <label for="email" class="form-label">E-mail</label>
            <input type="text" class="form-control" id="email" name="email" value="{{ $viewData['cliente']->getEmail() }}">
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