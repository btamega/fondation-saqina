<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Volumes extends Model
{
    use HasFactory;
    protected $fillable=[
        'id_volume',
        'Titre'
    ];
}
