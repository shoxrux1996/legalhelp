<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'Order';
    public function transactions(){
        return $this->hasMany('App\Transaction','OrderId','Id');
    }
    public function call(){
        return $this->hasOne('App\Call','Id','Id');
    }
}
