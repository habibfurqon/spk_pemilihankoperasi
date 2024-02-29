<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Koperasi extends Model
{
    use HasFactory;
    protected $table = 'koperasi';
    protected $fillable = [
        'nama',
        'deskripsi',
        'alamat',

    ];
}
