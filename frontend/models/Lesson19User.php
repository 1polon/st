<?php

namespace frontend\models;

use Yii;
use yii\base\Model;

class Lesson19User
{
    public $login;
    public $password;

    public function __construct($login, $password)
    {
        $this->login = $login;
        $this->password = $password;
    }

    public function __clone()
    {
        $this->password = $this->password . mt_rand(1,2384761);
    }
}
