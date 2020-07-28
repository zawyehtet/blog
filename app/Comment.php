<?php

namespace App;
use App\User;
use App\Article;
use App\Category;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = [ 'content', 'article_id','user_id']; 

    public function user()
    {
        return $this->belongsTo("App\User");
    }
}
