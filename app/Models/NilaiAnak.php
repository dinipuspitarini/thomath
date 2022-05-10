<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NilaiAnak extends Model
{
    use HasFactory;
    protected $table = 'nilai_anak';

    protected $fillable = [
        'anak_id',
        'mapel_id',
        'nilai',
        'material'
    ];
}
