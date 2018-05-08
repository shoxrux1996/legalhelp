<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $table = 'Document';
    public function lawyers(){
        return $this->belongsToMany('App\Lawyer','Makes','Id',
            'Email','Id','Email');
    }
}
