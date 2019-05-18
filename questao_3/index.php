<?php
include("MyUserClass.php");

$usuarioClass = new MyUserClass();
$usuario = $usuarioClass->getUserList();

foreach ($usuario as $reg){
    echo $reg['name'] . '<br /><br />';
}
