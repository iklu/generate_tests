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
        $selects = $data['selects'];
        $button = $data['button'];

        $string = ' $this->webDriver->get(\''.$url.'\');
        $this->webDriver->manage()->window()->maximize();';

        $jsInput = '';
        foreach($inputs as $key => $value) {
            $normalizeVariableToJs = str_replace("-","",$key );
            $jsInput .= ' var '.$normalizeVariableToJs.' = document.querySelectorAll(\'[name=\"'.$key.'\"]\');'.PHP_EOL;
        }

        $jsForeachInput = '';

        foreach($inputs as $key => $value) {
            $normalizeVariableToJs = str_replace("-","",$key );
            $jsForeachInput .= 'for (i = 0; i < '.$normalizeVariableToJs.'.length; i++) {
                    '.$normalizeVariableToJs.'[i].value = \"'.$value.'\";
            }'.PHP_EOL;
        }

        $jsSelect = '';
        foreach($selects as $key => $value) {
            $normalizeVariableToJs = str_replace("-","",$key );
            $jsSelect .= ' var '.$normalizeVariableToJs.' = document.querySelectorAll(\'[name=\"'.$key.'\"]\');'.PHP_EOL;
        }

        $jsSelectForeachInput = '';

        foreach($selects as $key => $value) {
            $normalizeVariableToJs = str_replace("-","",$key );
            $jsSelectForeachInput .= 'for (i = 0; i < '.$normalizeVariableToJs.'.length; i++) {
                    '.$normalizeVariableToJs.'[i].selected = true;
            }'.PHP_EOL;
        }

        $string .= '
        $this->webDriver->executeScript("  
        
        '.$jsInput.'  
        '.$jsSelect.'
        '.$jsForeachInput.'    
        '.$jsSelectForeachInput.'    
        
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