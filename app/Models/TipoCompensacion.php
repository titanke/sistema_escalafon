<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TipoCompensacion extends Model
{
    use HasFactory;
    protected $dateFormat = 'd/m/Y H:i:s'; 
    protected $fillable = ['nombre'];
}
