<?php 
$rows = file('source.csv');
$index = $_GET['line'];

unset($rows[$index]);

$new_data = implode('', $rows);

file_put_contents('source.csv', $new_data);

header('Location: index.php');
?>