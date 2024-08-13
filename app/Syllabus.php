<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Syllabus extends Model
{
    use HasFactory;
    protected $table = 'syllabuses';
    /**
    * Get the school record associated with the user.
    */
    public function school()
    {
        return $this->belongsTo('App\School');
    }
    /**
    * Get the class record associated with the syllabus.
    */
    public function myclass()
    {
        return $this->belongsTo('App\Myclass','class_id');
    }
}
