<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasbon extends Model
{
    use HasFactory;

    protected $guarded = [];


    public function kurs()
    {
        return $this->belongsTo(Kurs::class, 'id_kurs', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(Jenis::class, 'id_jenis', 'id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }
    public function pph()
    {
        return $this->belongsTo(Pph::class, 'id_pph', 'id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
    public function kodekasbon()
    {
        return $this->belongsTo(KodeKasbon::class, 'id_kodekasbon', 'id');
    }

    public function keterangan()
    {
        return $this->hasMany(Keterangan::class, 'nokasbon', 'nokasbon');
    }

    public function verifikasikasbon()
    {
        return $this->hasone(VerifikasiKasbon::class, 'id_kasbon', 'id');
    }

    public function pertanggungan()
    {
        return $this->hasOne(Pertanggungan::class, 'nokasbon', 'nokasbon');
        return $this->hasOne(Pertanggungan::class, 'id_kasbon', 'id');
    }

    public function kelengkapan()
    {
        return $this->hasOne(Kelengkapan::class, 'id_kasbon', 'id');
        return $this->belongsTo(Kelengkapan::class, 'id_kelengkapan', 'id');
    }

    public function keterangan_kasbon()
    {
        return $this->hasMany(Keterangan_detail::class, 'id_kasbon', 'id');
    }
}
