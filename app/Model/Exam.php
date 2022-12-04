<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
        'title', 
        'totalDegree',
         'isActive',
         'chapter_id'
    ];

    public function questions()
    {
        return $this->hasMany('App\Model\Question', 'examId', 'id')->orderBy('order');
    }
}
