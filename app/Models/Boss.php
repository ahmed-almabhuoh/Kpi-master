<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Boss extends Authenticatable
{
    use HasFactory;
    protected $fillable = [
        'fname','lname','email','password'
    ];
    public function company_roles()
    {
        return $this->hasMany(Role::class);
    }

    public function managers()
    {
        return $this->hasMany(Manager::class, 'boss_id', 'id');
    }

    public function institutions () {
        return $this->hasMany(Institution::class);
    }
}
