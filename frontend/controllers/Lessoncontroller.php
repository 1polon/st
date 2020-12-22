<?php

namespace frontend\controllers;

class LessonController extends \yii\web\Controller
{
    
    public function actionIndex($id)
    {
        $this->layout = 'lessons';
        $this->getView()->registerJsFile('@web/js/helpers.js');
        return $this->render($id);
    }
}
