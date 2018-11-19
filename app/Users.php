<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    protected $fillable = ['title','body'];
    protected $dates = ['created_at','updated_at'];
}
