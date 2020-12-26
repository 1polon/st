<?php


echo '<h2>DB INSERT, SELECT, DELETE, OR, AND</h2><div class="d-flex-row">';


$db = Yii::$app->db;

f(1, [
    'select with id=3' => $db->createCommand('select * from staff where id=3')->queryAll()
]);

f(2, [
    'all with salary=1000' => $db->createCommand('select name, salary from staff where salary=1000')->queryAll()
]);

f(3, [
    'all with age 23' => $db->createCommand('select name, age from staff where age=23')->queryAll()
]);

f(4, [
    'all with salary > 400' => $db->createCommand('select name, salary from staff where salary>400')->queryAll()
]);

f(5, [
    'salary >= 500' => $db->createCommand('select name,salary from staff where salary>=500')->queryAll()
]);

f(6, [
    'salary != 500' => $db->createCommand('select name,salary from staff where salary!=500')->queryAll()
]);

f(7, [
    'salary <= 900' => $db->createCommand('select name,salary from staff where salary<=900')->queryAll()
]);

f(8, [
    'name salary Вася' => $db->createCommand('select age,salary from staff where name="Вася"')->queryAll()
]);

f(9, [
    'age <=28 age >= 25' => $db->createCommand('select name, age from staff where age>=25 and age<=28')->queryAll()
]);

f(10, [
    'select Петя' => $db->createCommand('select name,age,salary from staff where name="Петя"')->queryAll()
]);

f(11, [
    'Petya and Vasil' => $db->createCommand('select name,age from staff where name="Петя" or name="Вася"')->queryAll()
]);

f(12, [
    'select all without Petya' => $db->createCommand('select * from staff where name!="Петя"')->queryAll()
]);

f(13, [
    'age 27 or salary 1000' => $db->createCommand('select name, age, salary from staff where age=27 or salary=1000')->queryAll()
]);

f(14, [
    'age >= 23 and <27 or salary<1000' => $db->createCommand('select name,age, salary from staff where (age<>23 and age<27) or salary<100')->queryAll()
]);

f(15, [
    'age > 23 age <27' => 1
]);

f(16, [
    'age = 27 or salary != 400' => $db->createCommand('select name,salary from staff where age=27 or salary!=400')->queryAll()
]);

f(17, [
    'ins Nik' => '$db->createCommand(\'insert into staff set name="Никита", age=26, salary=300\')->execute();'
]);

f(18, [
    'ins Sveta' => '$db->createCommand(\'insert into staff (name, salary) values ("Света", 1200)\')->execute()'
]);

f(19, [
    'ins Yara Petra' => '$db->createCommand(\'insert into staff (name, age, salary) values ("Ярослав", 30, 1200), ("Петра", 31, 1000)\')->execute()'
]);

f(20, [
    'delete id 7' => '$db->createCommand(\'delete from staff where id=7\')->execute()'
]);

f(21, [
    'del Nikolay' => '$db->createCommand(\'delete from staff where name="Коля"\')->execute()'
]);

f(22, [
    'del all age = 23' => '$db->createCommand()->delete(\'staff\', [\'age\' => 23])->execute()'
]);
// $db->createCommand('insert into staff(name, age, salary) values
// ("Дима", 23, 400),
// ("Вася", 23, 500)
// ')->execute();

f(23, [
    'vas 200 salary' => '$db->createCommand(\'update staff set salary=200 where name="Вася"\')->execute()'
]);

f(24, [
    'id = 4 age =35' => '$db->createCommand(\'update staff set age=35 where id=11\')->execute()'
]);

f(25, [
    'add where salary = 500 set 700' => '$db->createCommand(\'update staff set salary=700 where salary=500\')->execute()'
]);

f(26, [
    'net age for id <=5 id >2' => '$db->createCommand(\'update staff set age=23 where id>2 and id<=5\')->execute()'
]);

