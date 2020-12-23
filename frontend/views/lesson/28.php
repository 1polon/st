<?php

require_once(Yii::getAlias('@app') . '/functions/forLessons.php');

echo '<h2>Regex 3</h2><div class="d-flex-row">';
$r_1 = '';
$s_1 = 'aaa@bbb eee7@kkk';

$r_1_1 = preg_replace('#([a-z\d]+)@([a-z\d]+)#', '$2@$1', $s_1);

f(1, [
    'flip @ flip' => $r_1_1
]);

$s_2 = 'a1b2c3';

$r_2 = preg_replace('#(\d)#', '$1$1', $s_2);

f(2, [
    'a11b22c33' => $r_2
]);

$s_3 = 'aae xxz 33a';

$r_3 = preg_replace('#(\w)\1#', '!', $s_3);

f(3, [
    'replase identical characters' => $r_3
]);

$s_4 = 'aaa bcd xxx efg';

preg_match_all('#(\w)\1+#', $s_4, $r_4);

f(4, [
    'find identical' => i($r_4)
]);

$s_5 = 'mymail@mail.ru, my.mail@mail.ru, my-mail@mail.ru, my_mail@mail.ru, mail@mail.com, mail@mail.by, mail@yandex.ru';
$r_5 = [];
foreach(explode(', ', $s_5) as $key => $value) {   
    $r_5[] = preg_match('#^[a-zA-Z._-]+@[a-z]+\.[a-z]{1,5}$#', $value);
}
preg_match_all('#[a-zA-Z._-]+@[a-z]+\.[a-z]{1,5}#', $s_5, $r_5_1);

f('5, 6', [
    'is email? foreach' => $r_5,
    'is email? mathes' => $r_5_1[0]
]);

$s_7 = 'my-site123.com';
preg_match('#[a-z-\d]+\.[a-z]{1,5}#', $s_7, $r_7);

$st_8 = 'hello.si-te.ru';
preg_match('#[a-z\d-]+\.[a-z\d-]+\.[a-z]{1,5}#', $st_8, $r_8);

f('7, 8', [
    'is domain?' => $r_7,
    'is it third level domain?' => $r_8
]);

$st_9 = 'http://site.ru';

preg_match('#http://[a-z\d-]+\.[a-z]{1,5}#', $st_9, $r_9);


f(9, [
    'is http:// domain' => $r_9
]);

$st_10 = 'https://alskdf234.comd';
$st_10_1 = 'http://alkd-234.sdf';

preg_match('#htt(?:p|ps)://[a-z\d-]+\.[a-z]{1,5}#', $st_10, $r_10);
preg_match('#htt(?:p|ps)://[a-z\d-]+\.[a-z]{1,5}#', $st_10_1, $r_10_1);
f(10, [
    'is https or http' => $r_10,
    'is https or http ' => $r_10_1,
]);

$st_11 = 'https://site.ru/';

preg_match('#htt(?:ps|p)://[a-z\d-]+\.[a-z]{1,5}/?#', $st_11, $r_11);


f(11, [
    'is domain with "/" or not' => $r_11
]);

$st_13 = 'asdf.html';
$r_13 = preg_match('#\.(?:txt|html|php)\b#', $st_13, $r_13);


f(13, [
    'find extension is html' => $r_13
]);

$st_14 = 'asdf.jpeg';

$r_14 = preg_match('#\.jp(?:eg|g)$#', $st_14);

f(14, [
    'is jpeg?' => $r_14
]);

$st_15 = '12341235132';

$r_15 = preg_match('#^\d{0,11}$#', $st_15);
f(15, [
    'number of numbers less than 12' => $r_15
]);

$st_16 = '12asdf 3 a4 1 2 asdf3 d=-5132';
preg_match_all('#(\d)?#', $st_16, $r_16);

f(16, [
    'sum of string' => array_sum($r_16[0])
]);

$st_17 = '31-12-2014';

$r_17 = preg_replace('#(\d{1,2})-(\d{1,2})-(\d{1,4})#', '$3.$2.$1', $st_17);

f(17, [
    'date transform' => $r_17
]);

$st_18 = 'http://site.ru';

$r_18 = preg_replace('@^(http://)([a-z.]+)$@x', '<a href="$1$2">$2</a>', $st_18);
f(18, [
    htmlspecialchars('<a href="http://site.ru">site.ru</a>') => htmlspecialchars($r_18)
]);





























































