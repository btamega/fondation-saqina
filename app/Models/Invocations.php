<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invocations extends Model
{
    use HasFactory;
    protected $fillable=[
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'Titre',
        'Category',
        'Description',
        'Reference_Coran',
        'Reference_Hadith',
        'id_category_invocation',
    ];
}
