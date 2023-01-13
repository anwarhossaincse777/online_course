<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;

    public function course(){

        return $this->belongsTo(Course::class);
    }

    public function cheater(){

        return $this->belongsTo(Cheapter::class);
    }

    public function attatchments(){

        return $this->belongsTo(LessonAttatchment::class);
    }
}
