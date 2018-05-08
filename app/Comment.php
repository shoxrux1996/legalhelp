<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'Comments';
    public function blog(){
        return $this->hasOne('App\Blog','Id','Id');
    }
    public function user(){
        return $this->hasOne('App\User','Email','Email');
    }
}
