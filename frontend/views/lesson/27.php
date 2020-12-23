<?php

require_once(Yii::getAlias('@app') . '/functions/forLessons.php');

echo '<h2>Regex 2</h2><div class="d-flex-row">';



$string_1 = 'aa aba abba abbba abbbba abbbbba';

preg_match_all('#ab{2,4}a#', $string_1, $r_1);

f(1, [
    'abba, abbba, abbbba' => i($r_1)
]);

$string_2 = 'aa aba abba abbba abbbba abbbbba';

preg_match_all('#ab{1,3}a#', $string_2, $r_2);
f(2, [
    'aba less than three times inclusive' => i($r_2)
]);

preg_match_all('#ab{4,}a#', $string_2, $r_3);

f(3, [
    'aba more than four times inclusive' => i($r_3)
]);

$string_4 = 'a1a a2a a3a a4a a5a aba aca';
preg_match_all('#a\da#', $string_4, $r_4);

f(4, [
    'a + number + a' => i($r_4)
]);


$string_5 = 'aa a1a a22a a333a a4444a a55555a aba aca';

preg_match_all('#a\d+a#', $string_5, $r_5);
f(5, [
    'a + number(many) + a' => i($r_5)
]);

preg_match_all('#a\d*a#', $string_5, $r_6);

f(6, [
    'a + number(many | nothin) + a' => i($r_6)
]);

$string_7 = 'avb a1b a2b a3b a4b a5b abb acb';

preg_match_all('#a\Db#', $string_7, $r_7);

f(7, [
    'a + not number + a' => i($r_7)
]);

$string_8 = 'ave a#b a2b a$b a4b a5b a-b acb';

preg_match_all('#a\Wb#', $string_8, $r_8);

f(8, [
    'a + not(letter | space) + b' => i($r_8)
]);

$string_9 = 'ave a#a a2a a$a a4a a5a a-a aca';

$string_9 = preg_replace('#\s#', '!', $string_9);

f(9, [
    'all spaces to "!"' => $string_9
]);

$string_10 = 'aba aea aca aza axa';
preg_match_all('#a[bex]a#', $string_10, $r_10);

f(10, [
    'a (bex) a' => i($r_10)
]);

$string_11 = 'aba aea aca aza axa a.a a+a a*a';
preg_match_all('#a[b\+\.\*]a#', $string_11, $r_11);

f(11, [
    'aba, a.a, a+a, a*a' => i($r_11)
]);

$string_12 = 'a23a a2a a3a a6a';
preg_match_all('#a[3-7]a#', $string_12, $r_12);

f(12, [
    'a [3-7] a' => i($r_12)
]);

$string_13 = 'a23a aaa a3a ada';

preg_match_all('#a[a-g]a#', $string_13, $r_13);
f(13, [
    'a [a-g] a' => i($r_13)
]);

$string_14 = 'aaa aya a2a aea aia';
preg_match_all('#a[a-fj-z]a#', $string_14, $r_14);
f(14, [
    'a [a-fj-z] a' => i($r_14)
]);

$string_16 = 'aba aea aca aza axa a-a a#a';

preg_match_all('#\ba[^ex]a#', $string_16, $r_16);
f(16, [
    'word start a [^ex] a word end' => i($r_16)
]);

$string_17 = 'wйw wяw wёw wqw';
preg_match_all('#w[а-яё]w#ui', $string_17, $r_17);
f(17, [
    'w cirilic w' => i($r_17)
]);

$string_18 = 'aAXa aeffa aGha aza ax23a a3sSa';
preg_match_all('#a[a-z]+a#', $string_18, $r_18);

f(18, [
    'a latin(more than one) a' => i($r_18)
]);

preg_match_all('#a[a-zA-Z]+a#', $string_18, $r_19);

f(19, [
    'a a-zA-Z(more than one) a' => i($r_19)
]);

preg_match_all('#a[a-z\d]+a#', $string_18, $r_20);

f(20, [
    'a (latin leter and numbers) a' => i($r_20)
]);

$string_21 = 'ааа ббб ёёё ззз ййй ААА БББ ЁЁЁ ЗЗЗ ЙЙЙ';
preg_match_all('#\b[а-яё]+#ui', $string_21, $r_21);

$string_22 = 'aaa aaa aaa';
$string_22 = preg_replace('#^aaa#', '!', $string_22);
f(22, [
    'first word to "!"' => $string_22
]);

$string_23 = 'aaa aaa aaa';
$string_23 = preg_replace('#aaa$#', '!', $string_23);
f(23, [
    'last word to "!"' => $string_23
]);

$string_24 = 'aeeea aeea aea axa axxa axxxa';
preg_match_all('#a(e*|x*)a#', $string_24, $r_24);

f(24, [
    'a e|x(any nymber of times) a' => i($r_24)
]);

preg_match_all('#a(e{2}|x*)a#', $string_24, $r_25);

f(25, [
    'a e(twice)|x(any number of times) a' => i($r_25)
]);

$string_26 = 'xbx aca aea abba adca abea';

$r_26 = preg_replace('#\b#', '!', $string_26);

f(26, [
    'insert "!" to any words' => $r_26
]);

$string_27 = 'a\a abc';

$r_27 = preg_replace('#a\\\\a#', '!', $string_27);

f(27, [
    'a\a to "!"' => $r_27
]);

$string_28 = 'a\a a\\\a a\\\\\a';
$r_28 = preg_replace('#a\\\\{3}a#', '!', $string_28);

f(28, [
    'a \(any numbers of times) a' => $r_28
]);

$string_29 = 'bbb /aaa\ bbb /ccc\ ';

$r_29 = preg_replace('#/\w+\\\\#', '!', $string_29);

f(29, [
    'remplace any in /\\' => $r_29
]);

$string_30 = 'bbb <b> hello </b>, <b> world </b> eee';

$r_30 = preg_replace('#<b>.*?</b>#', '!', $string_30);

f(30, [
    htmlspecialchars('replace <b>any</b> to "!"') => $r_30
]);



























































