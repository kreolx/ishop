<?php
/**
 * Created by PhpStorm.
 * User: abele
 * Date: 04.10.2018
 * Time: 12:04
 */

namespace app\controllers;


use app\models\AppModel;
use ishop\base\Controller;

class AppController extends Controller
{
    public function __construct($route)
    {
        parent::__construct($route);
        new AppModel();
    }
}