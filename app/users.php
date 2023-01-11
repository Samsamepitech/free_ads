<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    protected $fillable = ['name', 'nickname', 'email', 'phone_num', 'password','admin'];
}
