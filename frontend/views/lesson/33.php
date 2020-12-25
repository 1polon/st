<?php

echo '<h2>Cookie</h2><div class="d-flex-row">';

setcookie('33_1', 'it\'s cookie number one');

f(1, [
    'get cookie' => $_COOKIE['33_1']
]);

unset($_COOKIE['33_1']);
f(2, [
    'get cookie' => isset($_COOKIE['33_1']) ? $_COOKIE['33_1'] : 'cookie not set'
]);

if (isset($_COOKIE['33_3'])) {
    setcookie('33_3', $_COOKIE['33_3'] + 1, time() + 3600);
    f(3, [
        'your are visited our site' => $_COOKIE['33_3']
    ]);
} else {
    setcookie('33_3', '0', time() + 3600);
}

$birthdayDate = empty($_REQUEST['birthdayDate']) ? '' : explode('.', $_REQUEST['birthdayDate']);
$daysToBirthday = '';
if (!empty($birthdayDate)) {   
    $year = date('Y');
    $birthdayTimestamp = mktime(0,0,0,$birthdayDate[1],$birthdayDate[0]) < time() ? mktime(0,0,0,$birthdayDate[1],$birthdayDate[0], $year + 1) : mktime(0,0,0,$birthdayDate[1],$birthdayDate[0]);
    $daysToBirthday = time() - $birthdayTimestamp;
    $daysToBirthday = abs(round($daysToBirthday / 86400));
    setcookie('33_4', $daysToBirthday, time() + 3600);
}
f(4, ['your birhtday' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="birthdayDate" id="" value="">
        <input type="submit" value="send">
        </form>',
'days to birthday' => $daysToBirthday,
'days to birthday from cookie' => isset($_COOKIE['33_4'])? $_COOKIE['33_4'] : 'coolie not set'
]);