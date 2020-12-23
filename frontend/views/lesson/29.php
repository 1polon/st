<?php

require_once(Yii::getAlias('@app') . '/functions/forLessons.php');

echo '<h2>Regex 4</h2><div class="d-flex-row">';

$st_1 = 'baaa';

$r_1 = preg_replace('#(?<=b)aaa#', '!', $st_1);

f(1, [
    'b!' => $r_1
]);

$st_2 = 'baaa waaa kaaa';

$r_2 = preg_replace('#(?<!b)aaa#', '!', $st_2);

f(2, [
    'b!' => $r_2
]);


$st_3 = 'aaab dddb oooc';

$r_3 = preg_replace('#aaa(?<=b)#', '!', $st_3);

f(3, [
    'aaab to !b' => $r_3
]);

$st_4 = 'aaas aaad aaab';

$r_4 = preg_replace('#aaa(?!b)#', '!', $st_4);

f(4, [
    'replace "aaa" in after is not "b"' => $r_4
]);

$st_5 = 'aaa * bbb ** eee * **';

$r_5 = preg_replace('#(?<!\*)\*(?!\*)#', '!', $st_5);

f(5, [
    'replace one "*"' => $r_5
]);

$st_6 = 'aaa * bbb ** eee *** kkk ***';

$r_6 = preg_replace('#(?<= )\*\*(?= )#', '!', $st_6);

f(6, [
    'replace two "**"' => $r_6
]);

$st_7 = 'asdf aasdf asdfaaasdf jjdas';

$r_7 = preg_replace('#([a-z])(?=\1)#', '!', $st_7);

f(7, [
    'replace first letter aadf => !adf' => $r_7
]);

$st_8 = 'asdf aasdf asdfaaasdf jjdas';

$r_8 = preg_replace('#([a-z])(?=\1)#i', '$1!', $st_8);

f(8, [
    'replace second letter aacvk => a!cvk' => $r_8
]);

$st_9 = 'w4rfrf43f4gfv5g98dj';
$r_9 = preg_replace_callback('#\d{1}#', 'toSquare', $st_9);

function toSquare($mathes)
{
    $result = pow($mathes[0], 3);
    return $result;
}
f(9, [
    'replace numbers to square' => $r_9
]);

$st_10 = "2aaa'3'bbb'4'";

$r_10 = preg_replace_callback('#(?<=\')\d(?=\')#', 'toSum', $st_10);
function toSum($mathes)
{
    $result = $mathes[0] * 2;
    return $result;
}
f(10, [
    'to sum all in \'2\'' => $r_10
]);
