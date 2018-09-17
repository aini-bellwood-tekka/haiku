<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HkUser extends Model
{
    protected $table = 'user';
    protected $guarded = array('id');
    public $timestamps = true;
}
