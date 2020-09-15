<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $guarded = array('id');

    //profile入力の値のバリデーション
    public static $rules = array(
    
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
