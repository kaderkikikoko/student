<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;
use App\Article;
use App\User;

class Article extends Model
{
    //public $table="students"protected $primaryKey = 'info_id';
    protected $primaryKey = 'artid';
    public $table="articles";
    public function comments(){

    	return $this->hasMany('App\Comment');
    }
    public function user(){

    	return $this->belongTo(App\User);
    }

}
