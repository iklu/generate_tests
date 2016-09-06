<?php
/**
 * Created by PhpStorm.
 * User: ovidiu
 * Date: 06.09.2016
 * Time: 10:00
 */

namespace src\library\RoutesTesting;


interface RoutesInterface
{
    /**
     * Get symfony project routes
     *
     * @return mixed
     */
    public function getSystemRoutes();
}