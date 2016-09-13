<?php

namespace testing\library\FormsTesting;

use src\library\Xml\XmlParser;
use src\library\FormsTesting\BuildFormsTest;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 07.09.2016
 * Time: 17:36
 */
class FormsTest extends \PHPUnit_Framework_TestCase
{
    public function testForms(){
        
        $sitemap = new XmlParser('http://dev.meineke-redesign.beta-directory.com/page-sitemap.xml');
        $urls = $sitemap->parse();
        
        
        $host = "http://dev.meineke-redesign.beta-directory.com";

        $dictionary = array(
            'email'=> 'dragoi__test__ovidiu2011@yahoo.com',
            'firstname'=>'ovidiu',
            'lastname'=>'dragoi',
            'storeid'=> '4',
            'location'=> 'houston, TX',
            'state'=>'TX',
            'city'=>'houston',
            'phone'=> '0749620628',
            'message'=> 'Testing, please ignore.Thank you!',
            'address'=> 'Texas, Houston',
            'country'=> 'United States',
            'day' => 5,
            'month'=> 5,
            'year'=>2017,
            'comments'=> 'Testing, please ignore.Thank you!'
        );
        
        $build = new BuildFormsTest($urls ,$host, $dictionary);
        $build->create();

    }
}