<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model{

    // sem esta linha, nao e possivel usar o metodo create
    protected $fillabe = ['name', 'email', 'subject','message'];
    
}

