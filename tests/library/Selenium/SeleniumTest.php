<?php
//
//namespace tests\library\Selenium;
//use MongoDB\BSON\Javascript;
//
///**
// * Created by PhpStorm.
// * User: ovidiu
// * Date: 09.09.2016
// * Time: 09:32
// */
//class SeleniumTest extends \PHPUnit_Extensions_Selenium2TestCase
//{
//
////    public static $browsers = array(
////        array(
////            'name'    => 'Linux Firefox',
////            'browser' => '*firefox',
////            'host'    => 'localhost',
////            'port'    => 4444,
////            'timeout' => 30000,
////        ),
////        array(
////            'name'    => 'Linux Opera',
////            'browser' => '*opera',
////            'host'    => 'localhost',
////            'port'    => 4444,
////            'timeout' => 30000,
////        ),
////        array(
////            'name'    => 'Linux Chrome',
////            'browser' => '*chrome',
////            'host'    => 'localhost',
////            'port'    => 4444,
////            'timeout' => 30000,
////        ),
////
////        array(
////            'name'    => 'MacOSX Safari',
////            'browser' => '*safari',
////            'host'    => 'my.macosx.box',
////            'port'    => 4444,
////            'timeout' => 30000,
////        ),
////        array(
////            'name'    => 'Windows Safari',
////            'browser' => '*custom C:\Program Files\Safari\Safari.exe -url',
////            'host'    => 'my.windowsxp.box',
////            'port'    => 4444,
////            'timeout' => 30000,
////        ),
////        array(
////            'name'    => 'Windows IE',
////            'browser' => '*iexplore',
////            'host'    => 'my.windowsxp.box',
////            'port'    => 4444,
////            'timeout' => 30000,
////        )
////    );
//
//
//    public function setUp()
//    {
//
//        $this->setHost("localhost");
//        $this->setPort(4444);
//        $this->setBrowserUrl("http://softwsp.com/contact/");
//        $this->setBrowser("chrome");
////        $this->setBrowser('chrome');
////        $this->setBrowserUrl('http://www.example.com/');
//    }
//
//    public function tearDown()
//    {
//        $this->stop();
//    }
//
//    public function validInputsProvider()
//    {
//        $inputs[] = [
//            [
//                'username'              => 'younesrafie',
//                'password'              => 'mypassword',
//                'password_confirmation' => 'mypassword',
//                'email'                 => 'mymail@gmail.com',
//                'cardHolderName'        => 'RAFIE Younes',
//                'cardNumber'            => '378282246310005',
//                'billingAddress'        => 'Narjiss B Fez Morocco',
//                'cvc'                   => '850',
//                'expirationMonth'       => '01',
//                'expirationYear'        => '2016',
//            ]
//        ];
//
//        return $inputs;
//    }
//
//    public static function invalidInputsProvider()
//    {
//        $inputs[] = [
//            [
//                'username'              => '@younesrafie',
//                'password'              => 'mypassword',
//                'password_confirmation' => 'mypassword',
//                'email'                 => 'mymail@gmail.com',
//                'cardHolderName'        => 'RAFIE Younes',
//                'cardNumber'            => '378282246310005',
//                'billingAddress'        => 'Narjiss B Fez Morocco',
//                'cvc'                   => '850',
//                'expirationMonth'       => '01',
//                'expirationYear'        => '2016',
//            ],
//            "Username must only contain alpha numeric characters and dashes."
//        ];
//        // ...
//
//        return $inputs;
//    }
//
//
//
////    public function testContactFormExists()
////    {
//////        $this->url( "http://192.168.0.159/FORMS/TestSubmit/form.html" );
//////
//////        $name = $this->byName( 'sender_name' );
//////        $email = $this->byName( 'sender_email' );
//////        $submit = $this->byName( 'submit_button' );
//////        $message = $this->byName( 'sender_message' );
//////        $surname = $this->byName( 'sender_surname' );
//////
//////
//////        $this->assertEquals( 'Anonymous Coward', $name->value() );
//////        $this->assertEquals( '', $email->value() );
//////        $this->assertEquals( 'Submit', $submit->value() );
//////        $this->assertEquals( 'A small message here', $message->value() );
//////        $this->assertEquals( '', $surname->value() );
////    }
//
//    public function testSubmitToSelf() {
//
//        $this->url( 'http://www.meineke.ca/rewards/register/' );
//
//
//
//        //$submitLink = $this->byTag("button")->text();
//        $form = $this->byXPath("//button[contains(.,'CREATE ACCOUNT')]");
//
//        $form->click();
//
//
//
//        $this->waitUntil(function($testCase) {
//            try {
//
////                $form = $testCase->byCssSelector("form");
////                $action = $form->attribute("action");
//
//                $form = $testCase->byXPath("//button[contains(.,'Sig in')]");
//
//              //  $testCase->assertEquals($action , 'http://www.meineke.ca/rewards/login_new/' );
//                //$submitLink = $testCase->byXPath("//button[contains(text(),'Create account')]");
//                  $testCase->byName("address")->value('strada cicoare');//
//                   $testCase->byName("password")->value('parola');
////
////                $testCase->byName("firstName")->value('ovidiu');//
////                $testCase->byName("lastName")->value('dragoi');
////                $testCase->byName("phone")->value('0749620620');
////                $testCase->byName("email")->value('iklu@yahoo.com');
////                $testCase->byName("password")->value('parola86');
////                $testCase->byName("confirm_password")->value('parola86');
//
//                // submit the form
//                $form->click();
//
////
////                $success = $testCase->byCssSelector('h3')->text();
////
////            // check the value
////                $testCase->assertEquals( 'Mail sent to PHPRO.ORG', $success );
//
//            } catch (\PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
//                return $e->getMessage();
//            }
//        }, 8000);
//
//    }
//
//    public function testSubmitToSelf1() {
//
//        $this->url( 'http://192.168.0.159/FORMS/TestSubmit/form.html' );
//
//        $this->waitUntil(function($testCase) {
//            try {
//
//                //$submitLink = $testCase->byCssSelector('button')->value('Create Account');
//                $submitLink = $testCase->byXPath("//button[contains(text(),'Create Account')]");
//
//                $testCase->byName("firstName")->value('ovidiu');
//                $testCase->byName("lastName")->value('dragoi');
//                $testCase->byName("phone")->value('0749620620');
//                $testCase->byName("email")->value('iklu@yahoo.com');
//                $testCase->byName("password")->value('parola86');
//                $testCase->byName("confirm_password")->value('parola86');
//
//                // submit the form
//                $submitLink->click();
//
//
//                $success = $testCase->byCssSelector('h3')->text();
////
////        // check the value
//                $testCase->assertEquals( 'Mail sent to PHPRO.ORG', $success );
//
//            } catch (\PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
//                return TRUE;
//            }
//        }, 8000);
//
//    }
////
////    public function testWaitSuccessfully()
////    {
////        $this->url( 'http://www.meineke.ca/rewards/register/' );
////
////
////        $this->waitUntil(function($testCase) {
////            try {
////                $testCase->byXPath("//button[contains(text(),'Create account')]");
////            } catch (\PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
////                return TRUE;
////            }
////        }, 8000);
////    }
////
////    /**
////     * @expectedException PHPUnit_Extensions_Selenium2TestCase_WebDriverException
////     */
////    public function testWaitUnsuccessfully()
////    {
////        $this->url( 'http://www.meineke.ca/rewards/register/' );
////
////        $this->waitUntil(function($testCase) {
////            try {
////                $testCase->byXPath("//button[contains(text(),'Create account')]");
////            } catch (\PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {
////                return TRUE;
////            }
////        }, 42);
////    }
////
////    /**
////     * @expectedException PHPUnit_Extensions_Selenium2TestCase_Exception
////     * @expectedExceptionMessage The valid callback is expected
////     */
////    public function testInvalidCallback()
////    {
////        $this->waitUntil('not a callback');
////    }
////
////    public function testImplicitWaitIsRestoredAfterFailure()
////    {
////        $this->url('http://www.meineke.ca/rewards/register/');
////        $this->timeouts()->implicitWait(7000);
////
////        try {
////            $this->waitUntil(function($testCase) {
////                $testCase->byId('testBox');
////                return TRUE;
////            });
////            $this->fail('Should fail because of the element not exists there yet');
////        } catch (\PHPUnit_Extensions_Selenium2TestCase_WebDriverException $e) {}
////
////        // in this case - element should be found, because of the implicitWait
////        $element = $this->byId('testBox');
////        $this->assertEquals('testBox', $element->attribute('id'));
////    }
////
////    public function testImplicitWaitIsRestoredAfterSuccess()
////    {
////        $this->url('html/test_wait.html');
////        $this->timeouts()->implicitWait(8000);
////
////        $this->waitUntil(function($testCase) {
////            $testCase->byId('parent');
////            return TRUE;
////        });
////
////        // in this case - element should be found, because we set a 8000ms implicitWait before the waitUntil.
////        $element = $this->byId('testBox');
////        $this->assertEquals('testBox', $element->attribute('id'));
////    }
////
////    public function testReturnValue()
////    {
////        $result = $this->waitUntil(function() {
////            return 'return value';
////        });
////
////        $this->assertEquals('return value', $result);
////    }
//}