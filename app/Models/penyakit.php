<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penyakit extends Model
{
    use HasFactory;

    protected $table = 'penyakits';

    public function riwayat()
    {
        return $this->hasMany(Riwayat::class, 'id_penyakit');
    }
}
