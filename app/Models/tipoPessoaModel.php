<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tipoPessoaModel extends Model
{
    use HasFactory;
    protected $table = 'tipo_pessoa';


    public function getTipoPessoa() {
       return tipoPessoaModel::all();
    }
}
