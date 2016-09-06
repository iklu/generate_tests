<?php

namespace tests\library\RoutesTesting;
use src\library\RoutesTesting\Routes;
use src\library\RoutesTesting\BuildRoutesTest;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 05.09.2016
 * Time: 17:25
 */
class RoutesTest extends \PHPUnit_Framework_TestCase
{
    public function testRoutes(){

        $routes = new Routes('../Meineke-WEB/');
        $routess =  $routes->getSystemRoutes();

        $build = new BuildRoutesTest($routess);
        $build->create();
    }
}