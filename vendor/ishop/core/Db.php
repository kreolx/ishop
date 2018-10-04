<?php
/**
 * Created by PhpStorm.
 * User: abele
 * Date: 04.10.2018
 * Time: 15:10
 */

namespace ishop;


class Db
{
    use TSingltone;

    protected function __construct()
    {
        $db = require_once  CONF . '/config_db.php';
        class_alias('\RedBeanPHP\R', '\R');
        \R::setup($db['dsn'], $db['user'], $db['pass']);
        if(!\R::testConnection()){
            throw new \Exception("Can't connect to db", 500);
        }
        \R::freeze(true);
        if(DEBUG){
            \R::debug(true, 1);
        }
    }

}