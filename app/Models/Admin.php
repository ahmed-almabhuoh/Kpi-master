<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Admin extends Authenticatable
{
<<<<<<< HEAD
    use HasFactory;
    protected $fillable = ['fname',
    'lname',
    'identity_no',
    'Phone',
    'BOD',
    'email',
    'password',];
=======
    use HasFactory, Notifiable;
>>>>>>> c23ef16c2e2c314c34f013e8f60fdd04b4df6908
}
