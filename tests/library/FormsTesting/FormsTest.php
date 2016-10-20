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

        $sitemap = new XmlParser('http://dev.mnkca.beta-directory.com/page-sitemap.xml');
       // $urls = $sitemap->parse();

        $urls = array("http://dev.meineke-redesign.beta-directory.com/about/real-estate/");
        
        
        $host = "http://dev.meineke-redesign.beta-directory.com/about/real-estate/";

        $dictionary = array(
            'email'=> 'dragoi__tes__ovidiu2011@yahoo.com',
            'firstname'=>'ovidiu',
            'lastname'=>'dragoi',
            'storeid'=> '4',
            'fullname'=>'ovidiu dragoi',
            'location'=> 'houston, TX',
            'center'=>4,
            'state'=>'ON',
            'locationState'=>'ON',
            'organization'=>'xivic test',
            'province'=>'ON',
            'city'=>'houston',
            'info'=>'Details',
            'phone'=> '0749620628',
            'message'=> 'Testing, please ignore.Thank you!',
            'address'=> 'Texas, Houston',
            'country'=> 'United States',
            'day' => 5,
            'month'=> 5,
            'year'=>2017,
            'comments'=> 'Testing, please ignore.Thank you!',
            'zipcode'=>12356,
            'rating'=>5,
            'dictionary'=>'brakes',
            'search'=>'houston',
            'password'=>'123456',
            'job'=>2,
            'carrier'=>'txt.att.net',
            'mobile'=>'0749626246',
            'image'=>'http://d2r3n4kkn82mu7.cloudfront.net/resources/uploads/images/coupons/NewC01-lg.png',
            'barcode'=>'http://d2r3n4kkn82mu7.cloudfront.net/resources/uploads/images/coupons/barcode_30082016.png',
            'buildingSize' => '500',
            'buildingDepth' => '500',
            'salePrice' => '500',
            'landSizeSqFt' => '500',
            'zonedAuto'=> '1',
            'buildingLength' => 1000,
            'landSize' => 300,
            'leaseRate' => 'one',
            'propertyTaxes'=>'multiple',
            'captcha'=>true,
            'avgvehicles'=>5,
            'comment'=> 'Testing, please ignore.Thank you!',
            'schedule-maintenance'=>true,
            'position'=>2
        );
        
        $build = new BuildFormsTest($urls ,$host, $dictionary);
        $build->create();

    }
}