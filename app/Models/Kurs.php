<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kurs extends Model
{
    use HasFactory;

    public function kasbon()
    {
        return $this->hasMany(User::class, 'id_kurs', 'id');
    }
}
