<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class actividad extends Model
{
    use HasFactory;
    protected  $table = 'actividades';
    
    protected $fillable = [
        'file_name',
        'file_path'
    ];
}
