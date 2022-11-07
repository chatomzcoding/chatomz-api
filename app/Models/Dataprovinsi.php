<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataprovinsi extends Model
{
    use HasFactory;

    protected $table = 'data_provinsi';

    protected $guarded = [];

    public function datakota()
    {
        return $this->hasMany(Datakota::class);
    }
}
