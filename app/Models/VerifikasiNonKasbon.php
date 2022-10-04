<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiNonKasbon extends Model
{
    use HasFactory;
    public $table = "verifikasi_non_kasbons";
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'id_vnk', 'id');
        return $this->belongsTo(User::class, 'id_vnk_a_1', 'id');
        return $this->belongsTo(User::class, 'id_vnk_a_2', 'id');
    }

    public function nonkasbon()
    {
        return $this->belongsTo(Nonkasbon::class, 'id_nonkasbon', 'id');
    }
}
