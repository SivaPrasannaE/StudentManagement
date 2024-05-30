<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'client.php';
    $username = $_POST["username"];
    $password = $_POST["password"];

    $query = "SELECT * FROM `admin_users_table` WHERE username = '$username' and password = '$password' ";

    $result = mysqli_query($CON,$query);


    if($result){
        $num = mysqli_num_rows($result);
        echo $num;
        if($num > 0){
        header('location:../form.html');
        }
        else{
            header('location:../index.html');
        }
    }
    
}