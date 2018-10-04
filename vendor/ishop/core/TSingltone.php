<?php
/**
 * Created by PhpStorm.
 * User: abele
 * Date: 04.10.2018
 * Time: 10:06
 */

namespace ishop;


trait TSingltone
{
    private static $instance;

    public static function instance() {
        if (self::$instance === null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
}