<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table= 'User';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
       'email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function client(){
        return $this->hasOne('App\Client','Email','Email');
    }
}
