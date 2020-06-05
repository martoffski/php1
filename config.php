<?php
const SERVER = "localhost";
const DB = 'feedback';
const LOGIN = "root";
const PASS = "root";

$database = mysqli_connect(SERVER,LOGIN,PASS,DB) or die("Ошибка соединения с базой данных");