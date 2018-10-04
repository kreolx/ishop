<?php
/**
 * Created by PhpStorm.
 * User: abele
 * Date: 04.10.2018
 * Time: 10:05
 */

namespace ishop;


class Registry
{
    use TSingltone;

    public static $properties = [];

    /**
     * @return array
     */
    public function getProperty($name)
    {
        if (isset(self::$properties[$name])) return self::$properties[$name];
        return null;
    }

    /**
     * @param array $properties
     */
    public function setProperty($name, $value)
    {
        self::$properties[$name] = $value;
    }

    public function getProperties() {
        return self::$properties;
    }

}