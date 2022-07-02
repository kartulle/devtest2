<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class Produto extends RModel
{
    use HasFactory;
    protected $table = "produtos";
    protected $fillable = ['nome', 'foto', 'descricao', 'valor'];

    public function carrinho()
    {
        return $this->hasMany(ItensPedido::class);
    }
}
