<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lawyer extends Model
{
    protected $table = 'Lawyer';

    protected $fillable = ['Email','Password','Gender','Fname','Lname','Mname','Confirmed'];

    public function user(){
        return $this->belongsTo('App\User','Email','Email');
    }
}
