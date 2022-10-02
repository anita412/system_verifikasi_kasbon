<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Nonkasbon extends Model
{
    use HasFactory;

    public function kodekasbon()
    {
        return $this->belongsTo(KodeKasbon::class, 'id_kodekasbon', 'id');
    }

    public function kurs()
    {
        return $this->belongsTo(Kurs::class, 'id_kurs', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }

    public function verifikasinonkasbon()
    {
        return $this->hasOne(VerifikasiNonKasbon::class, 'no_nonkasbon', 'no_nonkasbon');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_verifikator', 'id');
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}