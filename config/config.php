<?php
/*
Конфигурационный файл
*/
$server = array('local'=>'localhost','host'=>'0.0.0.0');
$login = array('local'=>'bargamut','host'=>'hostName');
$password = array('local'=>'test','host'=>'hostPassword');
$database = array('local'=>'bargamut','host'=>'hostDB');

$_SESSION['debug_mode'] = 'on';
include('lang/russian/russian.php');
include('classes/classes.php');
include('objects/objects.php');
include('functions/dbfunctions.php');
include('functions/functions.php');

?>