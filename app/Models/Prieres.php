<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prieres extends Model
{
    use HasFactory;
    protected $fillable=[
        'Titre',
        'created_at',
        'updated_at',
        'Description',
        'id_category_priere',
        'Reference_Coran',
        'Reference_Hadith',
        'Transcription_Phonetique'
    ];
}
