<?php
/**
 * Created by PhpStorm.
 * User: datdao
 * Date: 1/7/18
 * Time: 3:23 PM
 */

namespace src\Utilities;


class Menu
{

    public function create(ConfigMenu $config) {
        return sprintf("title: %s, body: %s", $config->title, $config->body);
    }
}