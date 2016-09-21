<?php

namespace src\library\FormsTesting\Components;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 21.09.2016
 * Time: 17:08
 */
class TestValidFormSubmission
{
    public static function create(){
        $string = '  $this->fillFormAndSubmit();

        $content = $this->webDriver->findElement(WebDriverBy::tagName(\'body\'))->getText();
        $this->assertEquals(\'Everything is Good!\', $content);'.PHP_EOL;
        return $string;
    }
}