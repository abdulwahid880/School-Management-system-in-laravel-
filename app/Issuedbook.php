<?php

namespace App;

use App\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Issuedbook extends Model
{
    use HasFactory;
    protected $table = 'issued_books';

    public function book()
    {
        return $this->belongsTo('App\Book');
    }
}
