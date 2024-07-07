<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    use HasFactory;
    public function tipopago(){
        return $this->belongsTo(Tipopago::class);
    }
    public function colaborador(){
        return $this->belongsTo(Colaborador::class);
    }
}


