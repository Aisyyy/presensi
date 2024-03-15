<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ruangan extends Model
{
    protected $fillable = [
        'jurusan',
        'fakultas',
        'tingkat',
        'nama_kelas',
    ];
}
