<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Article;
use App\User;

class Comment extends Model
{
    //
  protected $primaryKey = 'art_id';
    public $table="comments";
     public function article(){

    	return $this->belongTo(App\Article);
    }

}
