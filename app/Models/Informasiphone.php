<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Informasiphone extends Model
{
    use HasFactory;

    protected $table = 'informasi_phone';

    protected $guarded = [];

    public function informasiphonevarian()
    {
        return $this->hasMany(Informasiphonevarian::class);
    }
}
