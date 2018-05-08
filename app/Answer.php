<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $table ='Answers';
    public function question(){
        return $this-> belongsTo('App\Question','Title','Title');
    }
    public function lawyer(){
        return $this->belongsTo('App\Lawyer','Email','Email');
    }
}
