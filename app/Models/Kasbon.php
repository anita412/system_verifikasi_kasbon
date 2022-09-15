<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kasbon extends Model
{
    use HasFactory;

    protected $fillable = [
        'tglmasuk', 'jammasuk', 'jeniskasbon', 'doksebelumnya', 'kodekasbon', 'username'
    ];

    public function kurs()
    {
        return $this->belongsTo(Unit::class, 'id_kurs', 'id');
    }

    public function jenis()
    {
        return $this->belongsTo(Unit::class, 'id_jenis', 'id');
    }
    public function unit()
    {
        return $this->belongsTo(Unit::class, 'id_unit', 'id');
    }
    public function pph()
    {
        return $this->belongsTo(Pph::class, 'id_pph', 'id');
    }
}
