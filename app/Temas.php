<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Temas extends Model
{
    use SoftDeletes;
    protected $table = "temas";
}
