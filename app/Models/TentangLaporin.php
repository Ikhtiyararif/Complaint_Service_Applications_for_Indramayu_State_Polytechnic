<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TentangLaporin extends Model
{
    use HasFactory;
    
    protected $table = 'tentanglaporin';
    
    protected $fillable = [
        'title',
        'description'
    ];

    protected $guarded = [
        'image',
    ];
}
