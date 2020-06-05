<?php
const SERVER = "localhost";
const DB = 'shop';
const LOGIN = "root";
const PASS = "root";
const IMG = './img/';
const PRE = './img/preview/';
$database = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных");