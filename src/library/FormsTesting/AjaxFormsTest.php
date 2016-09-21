<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 15.09.2016
 * Time: 19:13
 */

namespace src\library\FormsTesting;


use Facebook\WebDriver\Interactions\WebDriverActions;
use Facebook\WebDriver\Remote\RemoteWebDriver;
use Facebook\WebDriver\Remote\WebDriverCapabilityType;

class AjaxFormsTest extends \PHPUnit_Framework_TestCase
{
    protected static $driver;
    protected static $baseUrl;

    public static function setUpBeforeClass()
    {

        parent::setUpBeforeClass();
        // Example
        $capabilities = array(
            WebDriverCapabilityType::BROWSER_NAME => 'firefox',
            'firefox_profile' => file_get_contents(__DIR__ . 'profile.zip.b64'),
        );

        self::$driver = RemoteWebDriver::create('http://127.0.0.1:4444/wd/hub', $capabilities);

        self::$baseUrl = "http://127.0.0.1";
    }

    /**
     * waitForAjax : wait for all ajax request to close
     * @param  integer $timeout  timeout in seconds
     * @param  integer $interval interval in miliseconds
     * @return void
     */
    public static function waitForAjax($timeout = 5, $interval = 200)
    {
        self::$driver->wait($timeout, $interval)->until(function() {
            // jQuery: "jQuery.active" or $.active
            // Prototype: "Ajax.activeRequestCount"
            // Dojo: "dojo.io.XMLHTTPTransport.inFlight.length"
            $condition = 'return ($.active == 0);';
            return self::$driver->executeScript($condition);
        });
    }
}