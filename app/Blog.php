<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $table = 'Blog';

    public function commentedUser(){
        return $this->belongsToMany('App\User','Comments','Id','Email',
            'Id','Email')->withPivot('Text');
    }

}
