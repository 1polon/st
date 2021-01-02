<?php

use yii\helpers\Html;
use yii\helpers\Url;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h2>Hello litl bithes</h2>
    <?= Html::a( 'lesson 1', ['site/study', 'lesson' => '1']) ?>
</div>
<h1>PHP practice</h1>
<?= Html::a('lelsson 22', Url::to(['/lesson', 'id' => 22])) ?>
<h2>Regex</h2>
 <?= Html::a('lelsson 26', Url::to(['/lesson', 'id' => '26'])) ?> 
 <?= Html::a('lelsson 27', Url::to(['/lesson', 'id' => '27'])) ?>
 <?= Html::a('lelsson 28', Url::to(['/lesson', 'id' => '28'])) ?>
 <?= Html::a('lelsson 29', Url::to(['/lesson', 'id' => '29'])) ?>
 <h2>Sessions</h2>
 <?= Html::a('lelsson 32', Url::to(['/lesson', 'id' => '32'])) ?>
 <h2>Cookie</h2>
 <?= Html::a('lelsson 33', Url::to(['/lesson', 'id' => '33'])) ?>
 <h2>DB</h2>
 <?= Html::a('lelsson 34', Url::to(['/lesson', 'id' => '34'])) ?>
 <?= Html::a('lelsson 35', Url::to(['/lesson', 'id' => '35'])) ?>
 <h2>DB practice</h2>
 <?= Html::a('lelsson 43', Url::to(['/lesson', 'id' => '43'])) ?>
 <h1>Vue practice</h1>
 <?= Html::a('1 entery', Url::to(['/vue-lessons', 'id' => '1'])) ?>

