<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pph extends Model
{
    use HasFactory;

    public function kasbon()
    {
        return $this->hasMany(User::class, 'id_pph', 'id');
    }
}
