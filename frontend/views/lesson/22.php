<?php
echo '<h2>PHP,SQL</h2><div class="d-flex-row">';



// print task number
// print values
function f($task, $values)
{
    if (empty($task)) {
        throw new Exception('Task is tmpty', 1);
    }
    echo'<div class="flex-item">';
    echo"<h3 class=\"flex-item__h3\">Task $task</h3>";
    foreach ($values as $key => $value) {
        echo "<p>$key</p>";
        echo '<pre>';
        print_r($value);
        echo '<br>';
        var_dump($value);
        echo '</pre>';
    }
    echo'</div>';
};

date_default_timezone_set('Europe/Kiev');
$year = date('Y') + 1;
$result = strtotime("$year-01-01") - time();
$result = round($result / 86400);
f(1, ['Days before the new year' => $result]);














































































echo"</div>";