<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Chapter extends Model
{
    use HasFactory;
    protected $fillable = [
        
        'chapter_name',
        'chapter_number',
        'subject_id',
        'image',
       
        
    ];
}
