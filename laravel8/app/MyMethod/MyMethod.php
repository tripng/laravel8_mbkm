<?php

namespace App\MyMethod;

class MyMethod
{
    public static function money($v){
        return "Rp ".number_format($v,0,',','.');
    }
}
