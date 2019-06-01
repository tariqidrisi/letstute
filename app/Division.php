<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
	protected $table = "classes";
    protected $fillable  = ['name'];
}
