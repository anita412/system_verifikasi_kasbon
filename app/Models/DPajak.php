<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DPajak extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function kelengkapan()
    {
        return $this->belongsTo(Kelengkapan::class, 'id_dp', 'id');
    }

    public function kasbon()
    {
        return $this->belongsTo(Kasbon::class, 'nokasbon', 'nokasbon');
    }
}
