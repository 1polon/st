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