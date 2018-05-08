<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Call extends Model
{
    protected $table = 'Call';
    public function lawyers(){
        return $this->belongsToMany('App\Lawyer','Makes','Id',
            'Email','Id','Email');
    }
}
