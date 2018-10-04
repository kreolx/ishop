<?php
/**
 * Created by PhpStorm.
 * User: abele
 * Date: 04.10.2018
 * Time: 14:22
 */

namespace ishop\base;


use ishop\Db;

abstract class Model
{
    public $attributes = [];
    public $errors = [];
    public $rules = [];

    public function __construct()
    {
        Db::instance();
    }
}