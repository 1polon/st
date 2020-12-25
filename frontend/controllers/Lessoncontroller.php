<?php

namespace frontend\controllers;
use Yii;

require_once(Yii::getAlias('@app') . '/functions/forLessons.php');

class LessonController extends \yii\web\Controller
{
    
    public function actionIndex($id)
    {
        $this->layout = 'lessons';
        $this->getView()->registerJsFile('@web/js/helpers.js');
        return $this->render($id);
    }
}
