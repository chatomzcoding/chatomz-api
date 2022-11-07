<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakota extends Model
{
    use HasFactory;

    protected $table = 'data_kota';

    protected $guarded = [];

    public function dataprovinsi()
    {
        return $this->belongsTo(Dataprovinsi::class);
    }

    public function datakecamatan()
    {
        return $this->hasMany(Datakecamatan::class);
    }
}
