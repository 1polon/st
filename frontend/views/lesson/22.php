<?php
$this->registerJs(
    "var scroll = setInterval (function () {window.scrollBy (0,2000);}, 2000)"
);

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

function r($request)
{
    return empty($_REQUEST[$request]) ? false : $_REQUEST[$request];
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
    'Овен' =>       ['0321', '0420'],
    'Телец' =>      ['0421', '0520'],
    'Близнецы' =>   ['0521', '0620'],
    'Рак' =>        ['0621', '0722'],
    'Лев' =>        ['0723', '0822'],
    'Дева' =>       ['0823', '0923'],
    'Весы' =>       ['0924', '1023'],
    'Скорпион' =>   ['1024', '1121'],
    'Стрелец' =>    ['1122', '1221'],
    'Козерог ' =>   ['1222', 1300],
    'Козерог' =>    ['0',    '0119'],
    'Водолей' =>    ['0122', '0218'],
    'Рыбы' =>       ['0219', '0320'],
];

$userDate = empty($_REQUEST['birthdayDate']) ? null : $_REQUEST['birthdayDate'];
$result = '';
if (!empty($userDate)) {   
    $userDate =  implode('', array_reverse(explode('.', $userDate)));
    foreach ($zodiacs as $key => $value) {
        if ($value[0] <= $userDate && $value[1] >= $userDate) {
            $result = $key;
            break;
        }
    }
}

f(7, ['your birthday date date.month' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="birthdayDate" id="" value="">
        <input type="submit" value="send">
        </form>',
'your zodiac' => $result]);

$userDate = empty($_REQUEST['birthdayDate']) ? null : $_REQUEST['birthdayDate'];

$zodiacsPrediction = [
    'Овен' =>       ['1222' => 'It\'s good prediction'],
    'Телец' =>      ['1222' => 'It\'s good prediction'],
    'Близнецы' =>   ['1222' => 'It\'s good prediction'],
    'Рак' =>        ['1222' => 'It\'s good prediction'],
    'Лев' =>        ['1222' => 'It\'s good prediction'],
    'Дева' =>       ['1222' => 'It\'s good prediction'],
    'Весы' =>       ['1222' => 'It\'s good prediction'],
    'Скорпион' =>   ['1222' => 'It\'s good prediction'],
    'Стрелец' =>    ['1222' => 'It\'s good prediction'],
    'Козерог' =>    ['1222' => 'It\'s good prediction'],
    'Козерог ' =>    ['1222' => 'It\'s good prediction'],
    'Водолей' =>    ['1222' => 'It\'s good prediction'],
    'Рыбы' =>       ['1222' => 'It\'s good prediction'],
];

if (!empty($userDate)) {
    $userDate =  implode('', array_reverse(explode('.', $userDate)));
    $dateNow = date('md');
    foreach ($zodiacsPrediction[$result] as $key => $value) {
        if ($key == $dateNow) {
            $result = $value;
        }
    }
}


f(9, ['your birthday date date.month' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="birthdayDate" id="" value="">
        <input type="submit" value="send">
        </form>',
'your zodiac' => $result]);




$request_10 = empty($_REQUEST['22_10']) ? null : $_REQUEST['22_10'];
$words_10 = 0;
$letters_10 = 0;
$lettersWithoutSpaces_10 = 0;
if ($request_10 != null) {
    $words_10 = count(preg_split('/\s+/', $request_10));
    $letters_10 = iconv_strlen($request_10);
    $lettersWithoutSpaces_10 = iconv_strlen(str_replace(' ', '', $request_10));
}

f(10, ['enter your text' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <textarea name="22_10"></textarea><br>
        <input type="submit" value="send">
        </form>',
        'count words' => $words_10 ,
        'coutn letters' => $letters_10,
        'count letters without spaces' => $lettersWithoutSpaces_10,
]);


$request_11 = empty($_REQUEST['22_11']) ? false : $_REQUEST['22_11'];
$persentOfEachSymbol_11 = [];
if ($request_11) {
    $sumbols = mb_str_split($request_11);
    $sumbolsCount = iconv_strlen($request_11);
    foreach ($sumbols as $key => $value) {
        if (!empty($persentOfEachSymbol_11[$value])) {
            $persentOfEachSymbol_11[$value] += 1;
        } else {
            $persentOfEachSymbol_11[$value] = 1;
        }
    }

    foreach ($persentOfEachSymbol_11 as $key => $value) {
        $persentOfEachSymbol_11[$key] = round($value / $sumbolsCount, 2);
    }
    
}
f(11, ['enter your text' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <textarea name="22_11"></textarea><br>
        <input type="submit" value="send">
        </form>',
        'count letters without spaces' => $persentOfEachSymbol_11,
]);


$request_12 = empty($_REQUEST['22_12']) ? false : str_split($_REQUEST['22_12']);
$wordArray_12 = [
    'hello',
    'goodbye',
    'hlo'
];
$result_12 = [];
if ($request_12) {   
    foreach ($wordArray_12 as $key => $value) {
        $flag = true;
        foreach ($request_12 as $key2 => $value2) {
            strpos($value, $value2) !== false ? '' : $flag = false;
        }
        $flag ? $result_12[] = $value : '';
    }
}

f(12, ['enter your text' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <textarea name="22_12"></textarea><br>
        <input type="submit" value="send">
        </form>',
        'words in array' => $result_12,
]);

$result_13 = [];
$request_13 = r('22_13');

// take alfabet first letters
$request_13_array = preg_split('/\s+/', r('22_13'), -1, PREG_SPLIT_NO_EMPTY);
$firstLetter_13 = $request_13_array;
foreach ($firstLetter_13 as $key => $value) {
    $firstLetter_13[$key] =  mb_substr($value, 0, 1);
}
$firstLetter_13 = array_unique($firstLetter_13);
natcasesort($firstLetter_13);

foreach ($firstLetter_13 as $key => $value) {
    foreach ($request_13_array as $key2 => $value2) {
        mb_stripos($value2, $value) === 0 ? $result_13 += ["Words start with $value" => $value2] : '';
    }
}

f(13, ['enter your text' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <textarea name="22_13"></textarea><br>
        <input type="submit" value="send">
        </form>',
        'word start on' => $result_13,
]);


$request_14 = r('22_14');
$translit_14 = [
      'А' => 'A',   'а' => 'a', 
      'Б' => 'B',   'б' => 'b', 
      'В' => 'V',   'в' => 'v', 
      'Г' => 'G',   'г' => 'g', 
      'Д' => 'D',   'д' => 'd', 
      'Е' => 'E',   'е' => 'e', 
      'Ё' => 'Ë',   'ё' => 'ë', 
      'Ж' => 'Ž',   'ж' => 'ž', 
      'З' => 'Z',   'з' => 'z', 
      'И' => 'I',   'и' => 'i', 
      'Й' => 'J',   'й' => 'j', 
      'К' => 'K',   'к' => 'k', 
      'Л' => 'L',   'л' => 'l', 
      'М' => 'M',   'м' => 'm', 
      'Н' => 'N',   'н' => 'n', 
      'О' => 'O',   'о' => 'o', 
      'П' => 'P',   'п' => 'p', 
      'Р' => 'R',   'р' => 'r', 
      'С' => 'S',   'с' => 's', 
      'Т' => 'T',   'т' => 't', 
      'У' => 'U',   'у' => 'u', 
      'Ф' => 'F',   'ф' => 'f', 
      'Х' => 'CH',  'х' => 'ch', 
      'Ц' => 'C',   'ц' => 'c', 
      'Ч' => 'Č',   'ч' => 'č', 
      'Ш' => 'Š',   'ш' => 'š', 
      'Щ' => 'ŠČ',  'щ' => 'šč', 
      'Ъ' => '″',   'ъ' => '″', 
      'Ы' => 'Y',   'ы' => 'y', 
      'Ь' => '′',   'ь' => '′', 
      'Э' => 'È',   'э' => 'è', 
      'Ю' => 'JU',  'ю' => 'ju', 
      'Я' => 'JA',  'я' => 'ja',
];

$result_14 = strtr($request_14, $translit_14);

f(14, ['enter your text' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <textarea name="22_14"></textarea><br>
        <input type="submit" value="send">
        </form>',
        'translit' => $result_14,
]);


$request_15_text = r('22_15_text');
$request_15_radio = r('22_15');
$result_15 = '';
if ($request_15_radio == 'cirilic') {
    $translit_14 = array_flip($translit_14);
    $result_15 = strtr($request_15_text, $translit_14);
} else {
    $result_15 = strtr($request_15_text, $translit_14);
}


f(15, ['enter your text' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        <input type="text" name="22_15_text"><br>
        <input type="radio" name="22_15" value="translit" id="22_15_translit">
            <label for="22_15_translit">To translit</label>
        <input type="radio" name="22_15" value="cirilic" id="22_15_cirilic">
            <label for="22_15_cirilic">To cirilic</label>
        <input type="submit" value="send">
        </form>',
        'translit' => $result_15,
]);


$questions_16 = [
    '2+5' => '7',
    'Лучший размер груди?' => '5',
    'Работа делает из человека -' => 'обезьяну'
];
$result_16 = '';
$string_16 = '';
$i = 1;
$request_16_1 = r('22_16_1');
$request_16_2 = r('22_16_2');
$request_16_3 = r('22_16_3');
foreach ($questions_16 as $key => $value) {
    $result = ${'request_16_' .$i} == $value ? "<br>your answer " . ${'request_16_' . $i} ." correct <br>" : '<br><input type="text" name="22_16_' . $i . '"><br>';
    $string_16 .= $key . $result;
    $i++;
}

f(16, ['questions' => '<form action="#" method="post">
        <input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
        ' . $string_16 . '
        <input type="submit" value="send">
        </form>',
]);

$questions_17 = [
    '2+5' => ['true' => '7', '2', '3'],
    'Лучший размер груди?' => ['true' => '5', 'true' => '4', '2'],
    'Работа делает из человека -' => ['обезьяну', 'true' => "Человека"]
];
$i = 1;
$string_17 = '';
$ansvers_17 = ['0'];
foreach ($questions_17 as $key => $value) {
    ${'request_17_' . $i} = r("22_17_$i");
    $radio = '';
    foreach ($value as $key2 => $value2) {   
        
        $radio .= '<input id="radio_17_' . $i .'_' . $value2 . '" type="checkbox" name="22_17_' . $i .'_' . $value2 . '" value="' . $value2 .'"><label for="radio_17_' . $i .'_' . $value2 . '">' . $value2 . "</label><br>";
        // d($key2 === 'true');
        $key2 === 'true' ? $ansvers_17[$i] = $value2 : '';
    }
    // d(${'request_17_' .$i});
    // d($ansvers_17[$i]);
    $result = ${'request_17_' .$i} == $ansvers_17[$i] ? "<br>your answer " . ${'request_17_' . $i} ." correct <br>" : "<br>" . $radio;
    $string_17 .= $key . $result;
    $i++;
}

f(17, ['questions' => '<form action="#" method="post">
<input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
' . $string_17 . '
<input type="submit" value="send">
</form>',
]);


$request_19 = r('22_19');
$result_19 = 1;

for ($i=1; $i <= $request_19; $i++) { 
    $result_19 = $result_19 * $i;
}

f(19, ['factorial' => '<form action="#" method="post">
<input type="hidden" name="' . Yii::$app->request->csrfParam . '" value="' . Yii::$app->request->getCsrfToken() . '">
<input type="text" name="22_19">
<input type="submit" value="send">
</form>',
$result_19
]);
















































echo"</div>";