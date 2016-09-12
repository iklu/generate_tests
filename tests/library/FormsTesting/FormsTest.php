<?php

namespace tests\library\FormsTesting;
use Goutte\Client;
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 07.09.2016
 * Time: 17:36
 */
class FormsTest extends \PHPUnit_Framework_TestCase
{
    public function testForms(){

        //TODO get the pages that have forms with details 'page', 'form' , 'action' , 'input', 'js', with simpleHtmlDom

        //TODO pass all that is finding to build class for creating forms classes for testing

        $client = new Client();

        $crawler = $client->request('GET', 'http://dev.meineke-redesign.beta-directory.com/careers/meineke-service-advisor/');

        $form = $crawler->filter('form')->form();

        $action =  $form->getUri();


        foreach($form as $key=>$value) {
            echo $value->getName();
        }
        exit;


        $domDocument = new \DOMDocument;
        $domInput = $domDocument->createElement('input');
        $domInput->setAttribute('state', 'TX');
        $domInput->setAttribute('city', 'houston');
        $domInput->setAttribute('position', '2');
        $domInput->setAttribute('hiddenJob', '2');
        $domInput->setAttribute('firstName', '2');
        $domInput->setAttribute('lastName', '2');
        $domInput->setAttribute('email', 'dragoiovidiu@yahoo.com');
        $domInput->setAttribute('username', 'dragoiovidiu@yahoo.com');
        $domInput->setAttribute('phone', '0749620628');


        $formInput = new \Symfony\Component\DomCrawler\Field\InputFormField($domInput);
        $form->set($formInput);

        $crawler = $client->submit($form);

        echo $crawler->html();

        $client->getResponse()->getStatus();
    }
}