<?php

echo '<h2>DB INSERT, SELECT, DELETE, OR, AND</h2><div class="d-flex-row">';

$host = 'localhost:8080';
$user = 'st_user';
$password = 'st_user_password';
$db_name = 'st';

mysql_connect($host, $user, $password, $db_name) or die(mysqli_error($link));
phpinfo();