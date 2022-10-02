<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertanggungan extends Model
{

    protected $guarded = [];

    use HasFactory;

    public function kasbon()
    {
        return $this->belongsTo(Kasbon::class, 'nokasbon', 'nokasbon');
        return $this->belongsTo(Kasbon::class, 'id_kasbon', 'id');
    }

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_verifikator_kasbon', 'id');
        return $this->belongsTo(User::class, 'id_user', 'id');
        return $this->belongsTo(User::class, 'id_verifikator_ptj', 'id');
    }

    public function kdekasbon()
    {
        return $this->belongsTo(Kasbon::class, 'id_kodekasbon', 'id');
    }
}
