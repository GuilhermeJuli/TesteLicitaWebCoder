<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;

class Brand extends Model
{
    use HasFactory;

    protected $fillable = [ 
        "nome_marca",
        "fabricante"
    ];

}
