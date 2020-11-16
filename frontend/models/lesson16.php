<?php

namespace frontend\models;

use Yii;
use yii\base\model;

class lesson16  extends model
{
    public function find(string $string )
    {
        $parseRequest = file_get_contents('https://www.php.net/manual/ru/function.' . $string . '.php');

        return $parseRequest;
    }
}
