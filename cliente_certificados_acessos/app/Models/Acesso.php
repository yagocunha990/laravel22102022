<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acesso extends Model{
    use HasFactory;

    protected $fillable = ['acesso','anota','id_acesso_empresa'];
}
