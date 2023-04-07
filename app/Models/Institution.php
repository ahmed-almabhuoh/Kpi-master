<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;
    public function boss()
    {
        $this->belongsTo(Boss::class);
    }

    public function kpis () {
        return $this->belongsToMany(Kpis::class, 'institution_kpis');
    }

}
