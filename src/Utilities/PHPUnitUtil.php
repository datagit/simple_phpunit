<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/7/18
 * Time: 1:05 PM
 */

namespace src\Utilities;


class PHPUnitUtil
{
    public static function callMethod($obj, $name, array $args) {
        $class = new \ReflectionClass($obj);
        $method = $class->getMethod($name);
        $method->setAccessible(true);
        return $method->invokeArgs($obj, $args);
    }
}