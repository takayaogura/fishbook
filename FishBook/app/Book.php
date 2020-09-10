<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = array('id');

    //入力フィームの値のバリデーション
    public static $rules = array(
    
    );

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public static function getDate($from, $until)
    {
        //created_atが20xx/xx/xx ~ 20xx/xx/xxのデータを取得
        $date = Book::whereBetween('fishing_date', [$from, $until])->get();
        return $date;
    }

    public static function getSize($minSize, $maxSize) {
        $size = Book::whereBetween('size', [$minSize, $maxSize])->get();
        return $size;
    }

}