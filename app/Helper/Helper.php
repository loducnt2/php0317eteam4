<?php

namespace App\Helper;
use App\Category;

class Helper
{
    public static function category(){
        $cate = \App\Category::all()
            ->where('parent_id', '=', 1);

        return $cate;
    }

    public static function category2(){
        $cate = \App\Category::all()
            ->where('parent_id', '=', 2);

        return $cate;
    }

    public static function category3(){
        $cate = \App\Category::all()
            ->where('parent_id', '=', 3);

        return $cate;
    }

    public static function category4(){
        $cate = \App\Category::all()
            ->where('parent_id', '=', 4);

        return $cate;
    }

}