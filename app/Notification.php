<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Notification extends Model
{
    use HasFactory;
    /**
     * Get the student record associated with the user.
    */
    public function student()
    {
        return $this->belongsTo('App\User','student_id');
    }
    /**
     * Get the student record associated with the user.
    */
    public function teacher()
    {
        return $this->belongsTo('App\User','user_id');
    }
}
