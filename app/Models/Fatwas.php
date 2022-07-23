<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fatwas extends Model
{
    use HasFactory;
    protected $fillable=[
        'created_at',
        'updated_at',
        'Titre',
        'Description',
        'id_categorie_fatwas',
    ];
}
