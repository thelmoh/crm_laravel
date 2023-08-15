<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Contrato;

class Produto extends Model
{
    use HasFactory;
    protected $table = 'produtos';

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

    public function getPrecoPadrao() {
        return number_format($this->attributes['preco_padrao'], 2, ",", ".");
    }

    public function setPrecoPadrao($precoPadrao) {
        $precoPadrao = str_replace(".","",$precoPadrao);
        $precoPadrao = str_replace(",",".",$precoPadrao);
        $this->attributes['preco_padrao'] = $precoPadrao;
    }

    public function getAtivo() {
        return $this->attributes['ativo'];
    }

    public function setAtivo($ativo) {
        $this->attributes['ativo'] = $ativo;
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

    public function contratos() {
        return $this->belongsToMany(Contrato::class, 'produtos_contratos', 'produto_id', 'contrato_id')->withPivot(['id','quantidade','valor']);
    }

}
