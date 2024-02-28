<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //Relacion 1 a M inversa
    public function family(){
        return $this->belongsTo(Family::class);
    }
}
