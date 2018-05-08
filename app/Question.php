<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $table = 'Question';
    public function answers(){
        return $this->hasMany('App\Answer','Title','Title');
    }
}
