<?php
CONST PHOTO = './img/';
CONST PREVIEW = './img/preview/';
const SERVER = "localhost";
const DB = 'photo';
const LOGIN = "root";
const PASS = "";

$database = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных");