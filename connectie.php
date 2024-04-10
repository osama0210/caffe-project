<?php
$host = 'mysql_db';
$db   = 'test';
$user = 'root';
$pass = 'rootpassword';

$dsn = "mysql:host=$host;dbname=$db;charset=";
$options = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false,
];
$connection = new PDO("mysql:dbname=mydatabase;host=mysql_db" , "root" , "rootpassword");


?>