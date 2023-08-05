<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Observacao extends Model
{
    use HasFactory;

    protected $table = 'observacoes';

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function getObservacao() {
        return $this->attributes['observacao'];
    }

    public function getInicioObservacao() {
        return substr($this->attributes['observacao'], 0, 20)." ...";
    }

    public function setObservacao($observacao) {
        $this->attributes['observacao'] =  $observacao;
    }

    public function getPrazo() {
        return $this->attributes['prazo'];
    }

    public function getPrazoBR() {
        return date('d/m/Y', strtotime($this->attributes['prazo']));
    }
 
    public function setPrazo($prazo) {
        $this->attributes['prazo'] = $prazo;
    }

    public function getUrlTarefa() {
        return $this->attributes['url_tarefa'];
    }

    public function setUrlTarefa($urlTarefa) {
        $this->attributes['url_tarefa'] = $urlTarefa;
    }

    public function getTarefa() {
        return $this->attributes['tarefa'];
    }
    
    public function setTarefa($tarefa) {
        $this->attributes['tarefa'] = $tarefa;
    }

    public function getContratoId() {
        return $this->attributes['contrato_id'];
    }
    
    public function setContratoId($contratoId) {
        $this->attributes['contrato_id'] = $contratoId;
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

    public function contrato() {
        return $this->belongsTo(Contrato::class, 'contrato_id', 'id');
    }
}