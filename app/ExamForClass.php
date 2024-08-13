<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ExamForClass extends Model
{
    use HasFactory;
    public $timestamps = false;

    public function classes(){
        return $this->hasMany('App\Myclass');
    }

    public function exam(){
        return $this->belongsTo('App\Exam');
    }
}
