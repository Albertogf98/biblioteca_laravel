<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopyBook extends Model {
    //use HasFactory;
  //  protected $id, $title, $author, $editorial;

    public function __construct() { }


    public function users()  {
        return $this->belongsToMany(User::class, 'lendings')->withPivot('user_id');
    }
}
