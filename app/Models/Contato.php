<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $table = 'contatos';

    public function getId() {
        return $this->attributes['id'];
    }

    public function setId($id) {
        $this->attributes['id'] = $id;
    }

    public function getNome() {
        return $this->attributes['nome'];
    }

    public function setNome($nome) {
        $this->attributes['nome'] = $nome;
    }

    public function getTelefone() {
        return $this->attributes['telefone'];
    }

    public function setTelefone($telefone) {
        $this->attributes['telefone'] = $telefone;
    }

    public function getEmail() {
        return $this->attributes['email'];
    }

    public function setEmail($email) {
        $this->attributes['email'] = $email;
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
    
}
