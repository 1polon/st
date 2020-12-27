<?php

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
function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';
    die();
}
function r($request)
{
    return empty($_REQUEST[$request]) ? false : $_REQUEST[$request];
}

function i($array)
{
    return implode(', ', $array[0]);
}