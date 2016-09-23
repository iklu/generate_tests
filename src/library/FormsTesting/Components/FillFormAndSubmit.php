<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 21.09.2016
 * Time: 17:50
 */

namespace src\library\FormsTesting\Components;


class FillFormAndSubmit
{
    public static function create($data){

        $url = $data['page_url'];
        $inputs = $data['inputs'];
        $button = $data['button'];

        $string = ' $this->webDriver->get(\''.$url.'\');
        $this->webDriver->manage()->window()->maximize();';

        $jsInput = '';
        foreach($inputs as $key => $value) {
            $jsInput .= ' var '.$key.' = document.querySelectorAll(\'[name=\"'.$key.'\"]\');'.PHP_EOL;
        }

        $jsForeachInput = '';

        foreach($inputs as $key => $value) {
            $jsForeachInput .= 'for (i = 0; i < '.$key.'.length; i++) {
                    '.$key.'[i].value = \"'.$value.'\";
            }'.PHP_EOL;
        }

        $string .= '
        $this->webDriver->executeScript("  
        
        '.$jsInput.'  
        '.$jsForeachInput.'    
        
        var button = document.getElementsByTagName(\'button\');
        for (var i = 0; i < button.length; i++) {
          if (button[i].innerHTML === \''.$button.'\') {
            button[i].click();
          }
        }"
        );
        '.PHP_EOL;

        return $string;
    }
}