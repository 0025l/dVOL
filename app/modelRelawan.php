<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelRelawan extends Model
{

    protected $table = 'relawans';
     protected $primaryKey = 'id_rel';
    public $timestamps = false;
}
