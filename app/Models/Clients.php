<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $table = "clients";

    protected $fillable = [
       'id','name','lastname','address','population','phone','email','created_at','updated_at'
    ];

}
