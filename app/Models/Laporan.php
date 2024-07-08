<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;
    protected $table = 'laporan';
    protected $fillable = [
        'user_id',
        'klasifikasilaporan_id',
        'name',
        'kartu',
        'induk',
        'status',
        'tlp',
        'email',
        'alamat',
        'statuspelapor_id',
        'subjeklaporan_id',
        'tglkejadian',
        'tglpelaporan',
        'judul',
        'description',
        'unit_id',
    ];

    protected $guarded = [
        'image',
    ];


    public function klasifikasilaporan()
    {
        return $this->belongsTo(KlasifikasiLaporan::class, 'klasifikasilaporan_id', 'id');
    }

    public function StatusPelapor()
    {
        return $this->belongsTo(StatusPelapor::class, 'statuspelapor_id', 'id');
    }

    public function SubjekLaporan()
    {
        return $this->belongsTo(SubjekLaporan::class, 'subjeklaporan_id', 'id');
    }

    public function Unit()
    {
        return $this->belongsTo(Unit::class, 'unit_id', 'id');
    }
}
