<?php

session_start();

require_once(Yii::getAlias('@app') . '/functions/forLessons.php');

echo '<h2>Sessions</h2><div class="d-flex-row">';

$_SESSION['test'] = 'test';

f(1, [
    'return session' => $_SESSION['test']
]);

if (!isset($_SESSION['32_3'])) {
    $_SESSION['32_3'] = 1;
    f(3, [
        'you are not reload page' => 'reload num = ' . $_SESSION['32_3']
    ]);
} else {
    $_SESSION['32_3'] = $_SESSION['32_3'] + 1;
    f(3, [
        'you are reload' => $_SESSION['32_3']
    ]);
}

f(4, [
    'form' => '<form action="#" method="post">
    <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
    <input type="text" name="32_4" placeholder="inter your country">
    <input type="submit" value="Send">
    </form>'
]);
if (isset($_REQUEST['32_4'])) { 
    $_SESSION['32_4'] = $_REQUEST['32_4'];
}
if (isset($_SESSION['32_4'])) {
    d($_SESSION['32_4']);
}


if (isset($_SESSION['32_5'])) {
    f(5, [
        'you visited the site ... seconds ago' => time() - $_SESSION['32_5']
    ]);
} else {
    $_SESSION['32_5'] = time();
}


f(1, [
    'return session' => $_SESSION['test']
]);

