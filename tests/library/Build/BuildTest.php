<?php

namespace tests\library\Build;

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
 * Date: 05.09.2016
 * Time: 17:12
 */
class BuildTest extends \PHPUnit_Framework_TestCase
{
    public function testBuild(){
        $file = File::make('src/Vendor/Project/DefaultControllerTest.php');

        //use keyword
        $file->addFullyQualifiedName(new FullyQualifiedName('Symfony\Bundle\FrameworkBundle\Test\WebTestCase'));


        $class = Object::make('AppBundle\Tests\Controller\DefaultControllerTest');
        $class->extend(new Object('Vendor\Project\WebTestCase'));


        $body=array();
        $body[] = '$client = static::createClient();'.PHP_EOL;

        for($i=0; $i<10; $i++) {
            $body[] = '$crawler = $client->request(\'GET\', \'/app/example\');'.PHP_EOL;
        }


        $body = implode($body);


        $class->addMethod(
            Method::make('testCompleteScenario')
                ->setBody($body)
        );


        $file->setStructure($class);

        // Generate the code and display in the console
        $prettyPrinter = Build::prettyPrinter();
        $generatedCode = $prettyPrinter->generateCode($file);

        file_put_contents('./built_tests/DefaultControllerTest.php', $generatedCode);
        echo $generatedCode;
    }
}