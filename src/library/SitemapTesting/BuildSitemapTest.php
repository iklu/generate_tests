<?php

namespace src\library\SitemapTesting;

use src\library\Build\BuildInterface;
use Memio\Memio\Config\Build;
use Memio\Model\File;
use Memio\Model\Object;
use Memio\Model\Property;
use Memio\Model\Method;
use Memio\Model\Argument;
use Memio\Model\Contract;
use Memio\Model\Constant;
use Memio\Model\FullyQualifiedName;


/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 06.09.2016
 * Time: 15:50
 */
class BuildSitemapTest implements BuildInterface
{
    public $urls;

    public function __construct($urls) {
        $this->urls = $urls;
    }

    public function create(){

        $file = File::make('src/Vendor/Project/MyService.php');

        $file->addFullyQualifiedName(new FullyQualifiedName('Goutte\Client'));
        $file->addFullyQualifiedName(new FullyQualifiedName('\PHPUnit_Framework_TestCase'));


        $class = Object::make('built_tests\SitemapTest');
        $class->extend(new Object('PHPUnit_Framework_TestCase'));

        for($i=0; $i<count($this->urls ); $i++) {
            $bodyString = '';
            $bodyString .= '$client = new Client();'.PHP_EOL;
            $bodyString .= '$crawler = $client->request(\'GET\', \''.$this->urls[$i].'\');'.PHP_EOL;
            $bodyString .=  PHP_EOL;
            $bodyString .= '$this->assertEquals(200, $client->getResponse()->getStatus());'.PHP_EOL;
            //$bodyString .= '$this->assertTrue($crawler->filter(\'html:contains("Homepage")\')->count() > 0);'.PHP_EOL;

            $class->addMethod(
                Method::make('testSitemapUrl'.$i)
                    ->setBody(
                        $bodyString
                    )
            );
        }


        $file->setStructure($class);

        // Generate the code and display in the console
        $prettyPrinter = Build::prettyPrinter();
        $generatedCode = $prettyPrinter->generateCode($file);

        file_put_contents('./built_tests/SitemapTest.php', $generatedCode);
        echo "Done!";
    }
}