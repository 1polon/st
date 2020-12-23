<?php

require_once(Yii::getAlias('@app') . '/functions/forLessons.php');

echo '<h2>Regex</h2><div class="d-flex-row">';


$string_1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all('#a.b#', $string_1, $r_1);
$r_1 = implode(', ', $r_1[0]);

f(1, [
    'ahb, acb, aeb' => $r_1
]);

$string_2 = 'aba aca aea abba adca abea';

preg_match_all('#a..a#', $string_2, $r_2);
$r_2 = implode(', ', $r_2[0]);
f(2, [
    'abba adca abea' => $r_2
]);

$string_3 = 'aba aca aea abba adca abea';

preg_match_all('#ab.a#', $string_3, $r_3);
$r_3 = implode(', ', $r_3[0]);

f(3,[
    'abba и abea' => $r_3
]);

$string_4 = 'aa aba abba abbba abca abea';
preg_match_all('#ab+a#', $string_4, $r_4);
$r_4 = implode(', ', $r_4[0]);

f(4,[
    'aba, abba, abbba' => $r_4
]);


$string_5 = 'aa aba abba abbba abca abea';
preg_match_all('#ab*a#', $string_5, $r_5);
$r_5 = implode(', ', $r_5[0]);
f(5,[
    'aa, aba, abba, abbba' => $r_5
]);


$string_6 = 'aa aba abba abbba abca abea';
preg_match_all('#ab?a#', $string_6, $r_6);
$r_6 = implode(', ', $r_6[0]);
f(6,[
    'aa, aba' => $r_6
]);



$string_7 = 'ab abab abab abababab abea';
preg_match_all('#(ab)+#', $string_7, $r_7);
$r_7 = implode(', ', $r_7[0]);
f(7,[
    '"ab" - one or more' => $r_7
]);



$string_8 = 'a.a aba aea';
preg_match_all('#a\.a#', $string_8, $r_8);
$r_8 = implode(', ', $r_8[0]);
f(8,[
    'a.a' => $r_8
]);



$string_9 = '2+3 223 2223';
preg_match_all('#2\+3#', $string_9, $r_9);
$r_9 = implode(', ', $r_9[0]);
f(9,[
    '2+3' => $r_9
]);


$string_10 = '23 2+3 2++3 2+++3 345 567';
preg_match_all('#2\++3#', $string_10, $r_10);
$r_10 = implode(', ', $r_10[0]);
f(10,[
    '2+3, 2++3, 2+++3' => $r_10
]);


$string_11 = '23 2+3 2++3 2+++3 445 677';
preg_match_all('#2\+*3#', $string_11, $r_11);
$r_11 = implode(', ', $r_11[0]);
f(11,[
    '23 2+3, 2++3, 2+++3' => $r_11
]);


$string_12 = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
preg_match_all('#\*q+\+#', $string_12, $r_12);
$r_12 = implode(', ', $r_12[0]);
f(12,[
    '*q+, *qq+, *qqq+' => $r_12
]);


$string_13 = '*+ *q+ *qq+ *qqq+ *qqq qqq+';
preg_match_all('#\*q*\+#', $string_13, $r_13);
$r_13 = implode(', ', $r_13[0]);
f(13,[
    '*+, *q+, *qq+, *qqq+' => $r_13
]);






$string_14 = 'aba accca azzza wwwwa';
$r_14 = preg_replace('#a.*?a#', '!', $string_14);
f(14,[
    '"a" "any" "a" replace to "!"' => $r_14
]);











