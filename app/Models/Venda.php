<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Venda extends Model
{
    //
    protected $table = 'venda';

    public function funcionario()
    {
        return $this->belongsTo(Funcionario::class); 

    }
    public function moto()
    {
        return $this->belongsTo(Moto::class, 'moto_id');
    }
    
    public function loja()
    {
        return $this->belongsTo(Loja::class, 'loja_id');
    }


}
