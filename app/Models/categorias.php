<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class categorias extends Eloquent
{
    use HasFactory;

    public function productos()
    {
        return $this->hasMany(productos::class, 'categoria_id', '_id');
    }
}
