<?php
/**
 * Created by PhpStorm.
 * User: abele
 * Date: 04.10.2018
 * Time: 11:48
 */

namespace app\controllers;


use ishop\App;
use ishop\Cache;

class MainController extends AppController
{

    public function indexAction(){
        $title = App::$app->getProperty('shop_name');
        $description = 'Главная страница сайта';
        $keywords = 'магазин, товары, купить онлайн';
        $this->setMeta($title, $description, $keywords);
        $posts = \R::findAll('test');
        $cache = Cache::instance();
        $cache->delete('test');
        $data = $cache->get('test');
        if(!$data){
            $cache->set('test', $posts);
        }
        $this->set(compact('posts'));
    }

}