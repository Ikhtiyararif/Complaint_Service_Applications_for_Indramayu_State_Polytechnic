<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KlasifikasiLaporan extends Model
{
    use HasFactory;
    protected $table = 'klasifikasilaporan';
    
    protected $fillable = [
        'title'
    ];
}
