<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model {
    //use HasFactory;
  //  protected $id, $title, $author, $editorial;

    public function __construct() { }


    public function users()  {
        return $this->belongsToMany('\App\Models\User', 'book_user')->withPivot('user_id', 'lendingDate');
    }
}
