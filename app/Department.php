<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Department extends Model
{
    use HasFactory;
    
    public function teachers(){
        return $this->hasMany('App\User','department_id');
    }
}
