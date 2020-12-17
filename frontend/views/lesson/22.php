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
$date = date('w', strtotime($requestDate));
var_dump($requestDate);
var_dump($date);
$weekDays = [
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










































































echo"</div>";