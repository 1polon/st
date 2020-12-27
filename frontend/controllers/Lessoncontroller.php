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

    public function actionDeleteStaff($id)
    {
        $db = Yii::$app->db;
        if ($db->createCommand("delete from staff where id=$id")->execute()) {
            Yii::$app->session->setFlash('success', 'User succesful deleted');
                return $this->goBack(Yii::$app->request->referrer);
        } else {
            Yii::$app->session->setFlash('alert', 'Error delete user');
                return $this->goBack(Yii::$app->request->referrer);
        }
    }

    public function actionCreateStaff()
    {
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post('staff');
            $name = mb_substr($post['name'], 0, 255);
            $age = (integer) $post['age'];
            $salary = (integer) $post['salary'];
            $db = Yii::$app->db;
            if ($db->createCommand("insert into staff(name, age, salary) values ($name, $age, $salary)")->execute()) {
                Yii::$app->session->setFlash('success', 'Staff created');
                return $this->goBack(Yii::$app->request->referrer);
            } else {
                Yii::$app->session->setFlash('alert', 'Staff created');
                return $this->redirect(['lesson', 'id' => 43]);
            }
        }
    }

    public function actionUpdateStaff($id)
    {
        $db = Yii::$app->db;
        $staff = $db->createCommand("select * from staff where id=$id")->queryOne();
        // dd($staff);
        if (Yii::$app->request->isPost) {
            $post = Yii::$app->request->post('staff');
            $name = mb_substr($post['name'], 0, 255);
            $age = (integer) $post['age'];
            $salary = (integer) $post['salary'];
            if ($db->createCommand("UPDATE staff SET name='$name', age=$age, salary=$salary WHERE id=$id")->execute()) {
                Yii::$app->session->setFlash('success', 'Staff updated');
                return $this->goBack(Yii::$app->request->referrer);
            } else {
                Yii::$app->session->setFlash('error', 'error to update');
                return $this->goBack(Yii::$app->request->referrer);
            }
        }
        return $this->render("update-staff", compact(
            'staff'
        ));
    }
}
