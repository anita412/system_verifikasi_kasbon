<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerifikasiPertanggungan extends Model
{
    use HasFactory;
    protected $guarded = [];
    public function pertanggungan()
    {
        return $this->belongsTo(Pertanggungan::class, 'id_pertanggungan', 'id');
    }
    public function user()
    {
        return $this->belongsTo(User::class, 'id_vkp', 'id');
        return $this->belongsTo(User::class, 'id_vkp_a_1', 'id');
        return $this->belongsTo(User::class, 'id_vkp_a_2', 'id');
        return $this->belongsTo(User::class, 'id_vkp_a_3', 'id');
    }
}
