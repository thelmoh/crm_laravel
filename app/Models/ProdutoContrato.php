<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProdutoContrato extends Model
{
    use HasFactory;
    protected $table = 'produtos_contratos';

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function getProdutoId() {
        return $this->attributes['produto_id'];
    }

    public function setProdutoId($produtoId) {
        $this->attributes['produto_id'] = $produtoId;
    }

    public function getContratoId() {
        return $this->attributes['contrato_id'];
    }

    public function setContratoId($contratoId) {
        $this->attributes['contrato_id'] = $contratoId;
    }

    public function getQuantidade() {
        return $this->attributes['quantidade'];
    }

    public function setQuantidade($quantidade) {
        $this->attributes['quantidade'] = $quantidade;
    }

    public function getValor() {
        return $this->attributes['valor'];
    }

    public function getValorBR() {
        return number_format($this->attributes['valor'], ",", ".");
    }

    public function setValor($valor) {
        $valor = str_replace(".","",$valor);
        $valor = str_replace(",",".",$valor);
        $this->attributes['valor'] = $valor;
    }

    public function getCreatedAt() {
        return $this->attributes['created_at'];
    }
    
    public function setCreatedAt($created_at) {
        $this->attributes['created_at'] = $created_at;
    }

    public function getUpdatedAt() {
        return $this->attributes['updated_at'];
    }
    
    public function setUpdatedAt($updated_at) {
        $this->attributes['updated_at'] = $updated_at;
    }

    public function getDeletedAt() {
        return $this->attributes['deleted_at'];
    }
    
    public function setDeletedAt($deleted_at) {
        $this->attributes['deleted_at'] = $deleted_at;
    }
}
