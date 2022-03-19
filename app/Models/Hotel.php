<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    use HasFactory;

    //Nome da tabela no DB
    protected $table = 'hoteis';
    
    //definindo as propiedades que pode ser alteradas
    protected $fillable = ['hotel_name','site','fone','email','address','stars'];
}
