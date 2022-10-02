<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiNonKasbon extends Model
{
    use HasFactory;

    public function nonkasbon()
    {
        return $this->belongsTo(Nonkasbon::class, 'no_nonkasbon', 'no_nonkasbon');
    }
}
