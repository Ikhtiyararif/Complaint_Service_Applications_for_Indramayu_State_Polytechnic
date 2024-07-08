<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPelapor extends Model
{
    use HasFactory;
    protected $table = 'statuspelapor';
    
    protected $fillable = [
        'title'
    ];
}
