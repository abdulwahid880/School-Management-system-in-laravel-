<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Homework extends Model
{
    use HasFactory;
    /**
     * Get the teacher record associated with the user.
    */
    protected $table = 'homeworks';
    
    public function teacher()
    {
        return $this->belongsTo('App\User');
    }
}
