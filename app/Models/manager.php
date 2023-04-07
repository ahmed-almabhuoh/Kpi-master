<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class manager extends Model
{
    use HasFactory;
    public function boss () {
        return $this->belongsTo(Boss::class, 'manager_id', 'id');
    }

    public function role () {
        return $this->belongsTo(Role::class);
    }
}
