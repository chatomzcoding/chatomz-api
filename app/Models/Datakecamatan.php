<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datakecamatan extends Model
{
    use HasFactory;

    protected $table = 'data_kecamatan';

    protected $guarded = [];

    public function datakota()
    {
        return $this->belongsTo(Datakota::class);
    }

    public function datadesa()
    {
        return $this->hasMany(Datadesa::class);
    }
}
