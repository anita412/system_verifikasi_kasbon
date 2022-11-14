<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiKasbon extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $dates = ['tgl_kelengkapan'];

    public function kasbon()
    {
        return $this->belongsTo(Kasbon::class, 'id_kasbon', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_vkb', 'id');
        return $this->belongsTo(User::class, 'id_vkb_a_1', 'id');
        return $this->belongsTo(User::class, 'id_vkb_a_2', 'id');
        return $this->belongsTo(User::class, 'id_vkb_a_3', 'id');
    }
}
