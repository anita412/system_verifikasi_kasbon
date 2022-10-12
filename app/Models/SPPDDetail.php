<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SPPDDetail extends Model
{
    use HasFactory;
    public $table = "sppd_details";
    protected $guarded = [];

    public function sppd()
    {
        return $this->belongsTo(SPPD::class, 'id_sppd', 'id');
    }
}