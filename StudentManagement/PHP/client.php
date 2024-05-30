<?php

$HOSTNAME = "localhost";
$USERNAME = 'root';
$PASSWORD = '';
$DATABASE = 'admin_users';

$CON = mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if($CON){
    echo "Connection is successful";
}
else{
    die(mysqli_error($CON));
}