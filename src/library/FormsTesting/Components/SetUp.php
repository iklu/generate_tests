<?php

namespace src\library\FormsTesting\Components;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 21.09.2016
 * Time: 17:07
 */
class SetUp
{

    public static function create() {
        $string = '$this->webDriver = RemoteWebDriver::create("http://localhost:4444/wd/hub", DesiredCapabilities::chrome());'.PHP_EOL;
        return $string;
    }
}