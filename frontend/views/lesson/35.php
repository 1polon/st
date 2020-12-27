<?php


echo '<h2>DB ORDER BY, SORT, LIKE, LIMIT</h2><div class="d-flex-row">';

$db = Yii::$app->db;

f(1, [
    '6 first results' => $db->createCommand('select * from staff limit 6')->queryAll()
]);

f(2, [
    '3 from 2' => $db->createCommand('select name from staff limit 2, 3')->queryAll()
]);

f(3, [
    'all sort by salary' => $db->createCommand('select name, salary from staff order by salary')->queryAll()
]);

f(4, [
    'all sort by salari deck' => $db->createCommand('select name,salary from staff order by salary desc')->queryAll()
]);

f(5, [
    'form 2 to 6 order by age' => $db->createCommand('select name, salary from staff order by age limit 2, 4')->queryAll()
]);

f(6, [
    'count all wordkers' => $db->createCommand('select count(*) from staff')->queryAll()
]);

f(7, [
    'count with salary=300' => $db->createCommand('select count(*) from staff where salary=300')->queryAll()
]);
// $db->createCommand('create table pages (
//     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
//     author VARCHAR(255) NOT NULL,
//     article VARCHAR(255) NOT NULL
//     )');
// $db->createCommand("insert into pages(author, article) values
// ('Петров',	'В своей статье рассказывает о машинах.'),
// ('Иванов',	'Написал статью об инфляции.'),
// ('Сидоров',	'Придумал новый химический элемент.'),
// ('Осокина',	'Также писала о машинах.'),
// ('Ветров',	'Написал статью о том, как разрабатывать элементы дизайна.')")->execute();
f(8, [
    'find where like last name `ов`' => $db->createCommand('select author from pages where author like "%ов"')->queryAll()
]);

f(9, [
    'find "элемент" in article' => $db->createCommand('select article from pages where article like "%элемент%"')->queryAll()
]);

f(10, [
    'find age 3_' => $db->createCommand('select name, age from staff where age like "3_"')->queryAll()
]);

f(11, [
    'find where last name end of "я"' => $db->createCommand('select name from staff where name like "%я"')->queryAll()
]);

f(1, [
    '' => 1
]);
