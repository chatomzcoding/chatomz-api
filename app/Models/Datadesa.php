<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datadesa extends Model
{
    use HasFactory;

    protected $table = 'data_desa';

    protected $guarded = [];

    public function datakecamatan()
    {
        return $this->belongsTo(Datakecamatan::class);
    }
}
