<?php

const MYSQL_HOST = 'localhost';
const MYSQL_PORT = 3306;
const MYSQL_NAME = 'we_love_food';
const MYSQL_USER = 'root';
const MYSQL_PASSWORD = '';

try {
    // $mysqlClient = new PDO(
    //     sprintf('mysql:host=%s;dbname=%s;port=%s', MYSQL_HOST, MYSQL_NAME, MYSQL_PORT),
    //     MYSQL_USER,
    //     MYSQL_PASSWORD
    // );
    $mysqlClient = new PDO('mysql:host=127.0.0.1;dbname=we_love_food;charset=utf8;port=3306', 'root', 'root');
    $mysqlClient->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(Exception $exception) {
    die('Erreur : '.$exception->getMessage());
}