<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $table = 'clientes';

    public function getId() {
        return $this->atrributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function getNome() {
        return $this->atrributes['nome'];
    }

    public function setNome($nome) {
        $this->attributes['nome'] =  $nome;
    }

    public function getEndereco() {
        return $this->attributes['endereco'];
    }

    public function setEndereco($endereco) {
        $this->attributes['endereco'] = $endereco;
    }

    public function getNumero() {
        return $this->attributes['numero'];
    }
    
    public function setNumero($numero) {
        $this->attributes['numero'] = $numero;
    }

    public function getBairro() {
        return $this->atrributes['bairro'];
    }
    
    public function setBairro($bairro) {
        $this->attributes['bairro'] = $bairro;
    }

    public function getComplemento() {
        return $this->atrributes['complemento'];
    }
    
    public function setComplemento($complemento) {
        $this->attributes['complemento'] = $complemento;
    }

    public function getCidade() {
        return $this->atrributes['cidade'];
    }
    
    public function setCidade($cidade) {
        $this->attributes['cidade'] = $cidade;
    }

    public function getUf() {
        return $this->atrributes['uf'];
    }
    
    public function setUf($uf) {
        $this->attributes['uf'] = $uf;
    }

    public function getTelefone() {
        return $this->atrributes['telefone'];
    }
    
    public function setTelefone($telefone) {
        $this->attributes['telefone'] = $telefone;
    }

    public function getCelular() {
        return $this->atrributes['celular'];
    }
    
    public function setCelular($celular) {
        $this->attributes['celular'] = $celular;
    }

    public function getEmail() {
        return $this->atrributes['email'];
    }
    
    public function setEmail($email) {
        $this->attributes['email'] = $email;
    }

    public function getResponsavel() {
        return $this->atrributes['responsavel'];
    }
    
    public function setResponsavel($responsavel) {
        $this->attributes['responsavel'] = $responsavel;
    }

    public function getAtivo() {
        return $this->atrributes['ativo'];
    }
    
    public function setAtivo($ativo) {
        $this->attributes['ativo'] = $ativo;
    }

    public function getCreatedAt() {
        return $this->atrributes['created_at'];
    }
    
    public function setCreatedAt($created_at) {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdatedAt() {
        return $this->atrributes['updated_at'];
    }
    
    public function setUpdatedAt($updated_at) {
        $this->attributes['updated_at'] = $updated_at;
    }

    public function getDeletedAt() {
        return $this->atrributes['deleted_at'];
    }
    
    public function setDeletedAt($deleted_at) {
        $this->attributes['deleted_at'] = $deleted_at;
    }


}
