<?php
/* Connect to an ODBC database using driver invocation */
$dsn = 'mysql:dbname=baseball;host=127.0.0.1;charset=UTF8';
$user = 'root';
$password = '1111';

try {
    $pdo = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
}

?>