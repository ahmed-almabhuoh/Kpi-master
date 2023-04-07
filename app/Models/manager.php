<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class manager extends Authenticatable 
{
    use HasFactory;
    protected $fillable = [
        'fname','lname','email','password'
    ];
    public function boss () {
        return $this->belongsTo(Boss::class, 'manager_id', 'id');
    }

    public function role () {
        return $this->belongsTo(Role::class);
    }
}
