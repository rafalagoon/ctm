<?php
require_once("ctmhtml.class.php");

$ctm = new ctm\CTMHTML();

$ctm->openHTML("home", "Community Task Manager");

$ctm->printHeader("Las Tareas");

$main = file_get_contents("index_main.html");

$ctm->printMain($main);

$ctm->closeHTML();

?>
