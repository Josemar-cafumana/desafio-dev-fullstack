<?php


define('ROOT',"http://localhost/Kaila/desafio-dev-fullstack");

define("DATA_LAYER_CONFIG", [
    "driver" => "mysql",
    "host" => "localhost",
    "port" => "3306",
    "dbname" => "kaila",
    "username" => "root",
    "passwd" => "root",
    "options" => [
        PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
        PDO::ATTR_CASE => PDO::CASE_NATURAL
    ]
]);

function url(string $path):string
{
    if($path) {
        return ROOT . "$path";
    }
    return ROOT;
}