<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{

    protected $table = 'Client';

    protected $fillable = ['Email','Password','Gender','Fname','Lname','Mname','Confirmed'];

    public function user(){
       return $this->belongsTo('App\User','Email','Email');
    }
    public function questions(){
        return $this->hasMany('App\Question','Email','Email');
    }
    public function orders(){
        return $this->hasMany('App\Order','Email','Email');
    }
}
