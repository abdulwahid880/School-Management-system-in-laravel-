<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Grade extends Model
{
    use HasFactory;
    /**
     * Get the course record associated with the user.
    */
    public function course()
    {
        return $this->belongsTo('App\Course');
    }
    /**
     * Get the student record associated with the user.
    */
    public function student()
    {
        return $this->belongsTo('App\User');
    }
    /**
     * Get the teacher record associated with the user.
    */
    public function teacher()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the exam name record associated with the exam.
    */
    public function exam()
    {
        return $this->belongsTo('App\Exam');
    }
}
