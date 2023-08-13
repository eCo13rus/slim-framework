<?php

namespace Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['firstName', 'lastName', 'email', 'password', 'city'];
}