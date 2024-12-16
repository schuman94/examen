<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $fillable = ['numero', 'cliente_id'];

    public function cliente() {
        return $this->belongsTo(Cliente::class);
    }

    public function movimientos() {
        return $this->hasMany(Movimiento::class);
    }
}
