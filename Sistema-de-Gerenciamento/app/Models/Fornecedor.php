<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    //
    protected $table = 'fornecedor';

    public function venda()
    {
        return $this->hasMany(Venda::class); 

    }
}
