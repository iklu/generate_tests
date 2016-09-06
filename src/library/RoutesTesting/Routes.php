<?php
namespace src\library\RoutesTesting;

use MrRio\ShellWrap as sh;
use src\library\RoutesTesting\RoutesInterface;

/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 06.09.2016
 * Time: 09:57
 */
class Routes implements RoutesInterface
{
    
    public $routesPath;

    public function __construct($routesPath) {
        $this->routesPath = $routesPath;
    }

    public function getSystemRoutes(){

        // List all routes
        $routes =  sh::php(' '.$this->routesPath.'app/console route:debug');

        $routesNames = preg_split('/\s+/', $routes);

        $rName =array();
        foreach ($routesNames as $key=>$value) {
            if ($value != 'ANY' && preg_match('/\//', $value)){
                $rName[] = $value;
            }
        }

        return $rName;
    }

}