<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Gradesystem extends Model
{
    use HasFactory;
    protected $table = 'grade_systems';

    public function school()
    {
        return $this->belongsTo('App\School');
    }
}
