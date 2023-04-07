<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    public function boss()
    {
        return $this->belongsTo(Boss::class);
    }

    public function managers()
    {
        return $this->hasMany(Manager::class);
    }
}
