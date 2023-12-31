<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Produto;

class Contrato extends Model
{
    use HasFactory;
    protected $table = 'contratos';

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function getDescricao() {
        return $this->attributes['descricao'];
    }

    public function setDescricao($descricao) {
        $this->attributes['descricao'] = $descricao;
    }

    public function getInicioBR() {
        return date("d/m/Y",strtotime($this->attributes['inicio']));
    }

    public function getInicio() {
        return $this->attributes['inicio'];
    }

    public function setInicio($inicio) {
        $this->attributes['inicio'] = $inicio;
    }

    public function getAtivo() {
        return $this->attributes['ativo'];
    }

    public function setAtivo($ativo) {
        $this->attributes['ativo'] = $ativo;
    }

    public function getClienteId() {
        return $this->attributes['cliente_id'];
    }

    public function setClienteId($clienteId) {
        $this->attributes['cliente_id'] = $clienteId;
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

    public function cliente() {
        return $this->belongsTo(Cliente::class, 'cliente_id', 'id');
    }

    public function observacoes() {
        return $this->hasMany(Observacao::class, 'contrato_id', 'id');
    }

    public function produtos() {
        return $this->belongsToMany(Produto::class, 'produtos_contratos', 'contrato_id', 'produto_id')->withPivot(['id','quantidade','valor']);
    }
}
