<?php

namespace frontend\controllers;

use Yii;

require_once (Yii::getAlias('@app') . '/functions/forLessons.php');

class VueLessonsController extends \yii\web\Controller
{
    public function actionIndex($id)
    {
        $this->getView()->registerJsFile('@web/js/helpers.js');
        return $this->render($id);
    }
}
