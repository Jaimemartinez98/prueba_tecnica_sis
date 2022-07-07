<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sispro extends Model
{
    use HasFactory;

    protected $table = "sispros";

    protected $fillable = [
       'id','NoPrescripcion','TipoTec','ConTec','NoEntrega','FecDireccionamiento','EstDireccionamiento'
    ];

}
