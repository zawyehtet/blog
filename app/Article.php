<?php

namespace App;
use App\Category;
use App\Comment;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable = [ 'title', 'body', 'category_id','user_id',]; 

    //
    // public function category(){
    //     return $this->belongsTo('App\Category');
    // }

    // public function coments(){
    //     return $this->hasMany('App\Comment');
    // }
    public function category()
    {
    return $this->belongsTo('App\Category');
    }
    public function comments()
    {
    return $this->hasMany('App\Comment');
    }
}
