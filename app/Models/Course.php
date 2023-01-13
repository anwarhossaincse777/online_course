<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    public function category(){

        return $this->belongsTo(Category::class);
    }

    public function chepters(){

        return $this->hasMany(Course::class);
    }

    public function lessons(){

        return $this->hasMany(Course::class);
    }

    public function reviews(){

        return $this->hasMany(Review::class);
    }

    public function assignemnts(){

        return $this->hasMany(Assignment::class);
    }

    public function assignemnt_submission(){

        return $this->hasMany(AssignmentSubmission::class);
    }

    public function enrolls(){

        return $this->hasMany(Enroll::class);
    }

    public function payments(){

        return $this->hasMany(Payment::class);
    }
}
