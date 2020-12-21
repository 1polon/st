<?php
echo '<h2>PHP,SQL</h2><div class="d-flex-row">';



// print task number
// print values
function f($task, $values)
{
    if (empty($task)) {
        throw new Exception('Task is tmpty', 1);
    }
    echo"<div class=\"flex-item\"><h3 class=\"flex-item__h3\">Task $task</h3>";
    foreach ($values as $key => $value) {
        echo "<p class=\"flex-item__p\">$key</p><div class=\"flex-item__block\">";
        print_r($value);
        echo "</div>";
    }
    echo'</div>';
};
function d($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
}

date_default_timezone_set('Europe/Kiev');
$year = date('Y') + 1;
$result = strtotime("$year-01-01") - time();
$result = round($result / 86400);
f(1, ['Days before the new year' => $result]);




$requestYear = !empty($_REQUEST['year']) ? $_REQUEST['year'] : '';
$leap = date('L', strtotime("$requestYear-01-01"));
$result;
if ($leap == 1) {
    $result = 'leap year';
} else if ($leap == 0) {
    $result = 'not leap year';
}
f(2, [
    'form' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="year" id="" value="' . $requestYear . '">
        <input type="submit" value="send">
        </form>',
    'Leap year' => $result
]);

$requestDate = empty($_REQUEST['date']) ? '' : $_REQUEST['date'];
$date = 0;
if (!empty($requestDate)) {   
    $requestDate = explode('.', $requestDate);
    $date = date('w', mktime(0,0,0,$requestDate[1], $requestDate[0], $requestDate[2]));
}
$weekDays = [
    0 => 'data not entered',
    'Sunday',
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday'
];
f(3, ['form' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="date" id="" value="' . $requestYear . '">
        <input type="submit" value="send">
        </form>',
    'Week' => $weekDays[$date]]);

$dateNow = '';
$monthsRu = [
    1 => 'январь',
    'февраль',
    'март',
    'апрель',
    'май',
    'июнь',
    'июль',
    'август',
    'сентабрь',
    'октябрь',
    'ноябрь',
    'декабрь'
];
$weeksRu = [
    'воскресенье',
    'понельник',
    'вторник',
    'среда',
    'четверг',
    'пятница',
    'субота',
];
$dateNow = date('d') . ' ' . 
$monthsRu[date('m')] . ' ' . 
date('Y') . ' года, ' . 
$weeksRu[date('w')];
f(4, ['Date now' => $dateNow]);


$birthdayDate = empty($_REQUEST['birthdayDate']) ? '' : explode('.', $_REQUEST['birthdayDate']);
$daysToBirthday = '';
if (!empty($birthdayDate)) {   
    $year = date('Y');
    $birthdayTimestamp = mktime(0,0,0,$birthdayDate[1],$birthdayDate[0]) < time() ? mktime(0,0,0,$birthdayDate[1],$birthdayDate[0], $year + 1) : mktime(0,0,0,$birthdayDate[1],$birthdayDate[0]);
    $daysToBirthday = time() - $birthdayTimestamp;
    $daysToBirthday = abs(round($daysToBirthday / 86400));
}


f(5, ['your birhtday' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="birthdayDate" id="" value="">
        <input type="submit" value="send">
        </form>',
'days to birthday' => $daysToBirthday]);

$DaysLeftToPancake = 0;
$pancakeYear = mktime(0,0,0,5) < time() ? date('Y', strtotime('now + 1 year') ) : date('Y');
for ($i=31; $i > 0; $i--) { 
    if (date('w', mktime(0,0,0,5, $i, $pancakeYear)) == 0) {
        $DaysLeftToPancake = mktime(0,0,0,5, $i, $pancakeYear) - time();
        $DaysLeftToPancake = round($DaysLeftToPancake / 86400, 2);
        break;
    }
}

f(6, ['Days to pancake day' => $DaysLeftToPancake]);

$zodiacs = [
    'Овен' => ['21-03-1970', '20-04-1970'],
    'Телец' => ['21-04-1970', '20-05-1970'],
    'Близнецы' => ['21-05-1970', '20-06-1970'],
    'Рак' => ['21-06-1970', '22-07-1970'],
    'Лев' => ['23-07-1970', '22-08-1970'],
    'Дева' => ['23-08-1970', '23-09-1970'],
    'Весы' => ['24-09-1970', '23-10-1970'],
    'Скорпион' => ['24-10-1970', '21-11-1970'],
    'Стрелец' => ['22-11-1970', '21-12-1970'],
    'Козерог' => ['22-12-1970', '19-01-1970'],
    'Водолей' => ['22-01-1971', '18-02-1971'],
    'Рыбы' => ['19-02-1971', '20-03-1971'],
];

$userDate = empty($_REQUEST['birthdayDate']) ? null : $_REQUEST['birthdayDate'];
$result = '';
if ($userDate != null) {   
    $userDate = explode('.', $userDate);
    foreach ($zodiacs as $key => $value) {
        $date1 = mktime(0,0,0, $value[1], $value[0]);
        $date2 = mktime(0,0,0, $value[3], $value[2]);
        $userDate = mktime(0,0,0, $userDate[1], $userDate[0]);
        if ($date1 < $userDate && $userDate < $date2) {
            $result = $key;
        }
    }
}


f(7, ['your birthday date date.month' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="birthdayDate" id="" value="">
        <input type="submit" value="send">
        </form>',
'your zodiac' => $result]);

































































echo"</div>";