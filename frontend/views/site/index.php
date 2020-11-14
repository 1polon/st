<?php

use yii\helpers\Html;

$this->title = 'My Yii Application';
?>
<div class="site-index">
    <h2>Hello litl bithes</h2>
    <?= Html::a( 'lesson 1', ['site/study', 'lesson' => '1']) ?>
</div>
