<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function user()
    {
        return $this->hasMany(User::class, 'id_unit', 'id');
    }

    public function kasbon()
    {
        return $this->hasMany(User::class, 'id_unit', 'id');
    }
}
