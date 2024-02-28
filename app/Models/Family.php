<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    //Relacion 1 a M
    public function categories(){
        return $this->hasMany(Category::class);
    }
}