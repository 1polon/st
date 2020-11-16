<?php

$getLesson = (int) Yii::$app->request->get('lesson');

use frontend\models\lesson16;
use frontend\models\Lesson19User;


if ($getLesson === 1) {
    
    $lesson16 = new Lesson16;
    $result = $lesson16->find('file-get-contents');
    preg_match('/dc-title">(?<description>[а-яА-Я ]+?)</u', $result, $result);
    echo '<pre>';
    var_dump($result['description']);


    
}

if ($getLesson === 2) {
    $user = new Lesson19User('asdf', 'wer23rq3i2uyr');
    var_dump($user);
    $user2 = clone $user;
    $user3 = clone $user;
    var_dump($user3);
    var_dump($user2);
    
}