<?php

$dsn = 'mysql:host=localhost;dbname=tp';
$username = 'root';
$password = '0000';
$options = array( 
    PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
); 

$db = new PDO($dsn, $username, $password, null);
