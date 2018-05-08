<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'Question';

    public function answers(){
        return $this->hasMany('App\Answer','Title','Title');
    }
    public function client(){
        return $this->belongsTo('App\Client','Email','Email');
    }
    public function category(){
        return $this->belongsTo('App\Category','CTitle','Title');
    }
}
