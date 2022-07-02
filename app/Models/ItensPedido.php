<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class ItensPedido extends RModel
{
    use HasFactory;
    protected $fillable = ['produto_id', 'quantidade'];
    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }
}
