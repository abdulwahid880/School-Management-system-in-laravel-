<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class School extends Model
{
  use HasFactory;
  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'about', 'medium', 'code', 'theme',
    ];

  public function users()
  {
    return $this->hasMany('App\User');
  }

  public function departments()
  {
    return $this->hasMany('App\Department');
  }

  public function gradesystems()
  {
    return $this->hasMany('App\Gradesystem');
  }
}
