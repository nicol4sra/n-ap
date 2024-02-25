<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tabla extends Model
{
    use HasFactory;
    
    protected $fillable = ['nombre', 'calorias', 'hc', 'proteinas', 'grasas'];
}
