<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class suratkeluar extends Model
{
    protected $fillable = ['no_surat', 'judul', 'pengirim', 'tanggal_keluar'];
}
