<?php

namespace src\library\FormsTesting\Components;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 21.09.2016
 * Time: 17:08
 */
class TearDown
{
    public static function create(){
        $string = '$this->webDriver->quit();'.PHP_EOL;
        return $string;
    }
}