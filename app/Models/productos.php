<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class productos extends Eloquent
{
    use HasFactory;

    public function categorias()
    {
        return $this->belongsTo(categorias::class, 'categoria_id', '_id');
    }

}
