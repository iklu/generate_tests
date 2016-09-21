<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 21.09.2016
 * Time: 10:16
 */

namespace tests\library\Selenium;

use Facebook\WebDriver\JavaScriptExecutor;
use Facebook\WebDriver\Remote\DesiredCapabilities;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Support\Events\EventFiringWebDriver;
use Facebook\WebDriver\WebDriverBy;


class WebDriverTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var RemoteWebDriver
     */
    protected $webDriver;

    public function setUp()
    {
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', DesiredCapabilities::chrome());
    }

    public function tearDown()
    {
        $this->webDriver->quit();
    }


    public function fillFormAndSubmit()
    {

        $this->webDriver->get('http://www.meineke.ca/rewards/register/');
        $this->webDriver->manage()->window()->maximize();
        
        
        $form = $this->webDriver->findElement(WebDriverBy::xpath("//button[contains(.,'Create account')]"));


        $this->webDriver->executeScript("
        
        var firstName = document.querySelectorAll('[name=\"firstName\"]');
        var lastName = document.querySelectorAll('[name=\"lastName\"]');
        var email = document.querySelectorAll('[name=\"email\"]');
        var password = document.querySelectorAll('[name=\"password\"]');

        for (i = 0; i < email.length; i++) {
            email[i].value = \"ovidiu.dragoi@yahoo.com\";
        }
        for (i = 0; i < firstName.length; i++) {
            firstName[i].value = \"ovidiu\";
        }
        for (i = 0; i < lastName.length; i++) {
            lastName[i].value = \"dragoi\";
        }
        for (i = 0; i < password.length; i++) {
            password[i].value = \"parolatest123\";
        } 
       
        
        var button = document.getElementsByTagName('button');
        for (var i = 0; i < button.length; i++) {
          if (button[i].innerHTML === 'Create account') {
            button[i].click();
          }
        }"
        );

    }


    public function testValidFormSubmission()
    {
        $this->fillFormAndSubmit();

        $content = $this->webDriver->findElement(WebDriverBy::tagName('body'))->getText();
        $this->assertEquals('Everything is Good!', $content);
    }

}