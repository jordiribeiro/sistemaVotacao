<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Opcoes extends Model
{
    use SoftDeletes;
    protected $table = "opcoes";
}
