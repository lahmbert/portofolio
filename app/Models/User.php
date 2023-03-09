<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Autheticable;

class User extends Autheticable
{
    use HasFactory;

    protected $table = 'tb_user';
    protected $primaryKey = 'user_id';

    protected $fillable = ['name', 'google_id', 'username', 'password'];
}
