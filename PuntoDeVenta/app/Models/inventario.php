<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\catalogo;


class inventario extends Model
{
    use HasFactory;
    protected $table = 'inventario';
    protected $fillable = ['catalogo_id','nombre','precio','stock','activo'];
    public function category()
    {
        return $this->belongsTo(catalogo::class, 'catalogo_id');
    }
    
}
