<?php

if($_SERVER['REQUEST_METHOD'] == 'POST'){

    include 'client.php';

    $NAME = $_POST["name"];
    $PHONE = $_POST["phone"];
    $EMAIL = $_POST["email"];
    $GENDER = $_POST["gender"];
    $DOB = $_POST["date_of_birth"];
    $RESIDENCY = $_POST["residency"];

    echo $NAME, $PHONE,$EMAIL, $GENDER, $DOB, $RESIDENCY;
    $query = "INSERT INTO `student_details` (`name`, `phone`, `email`, `gender`, `dob`, `residency`) VALUES ('$NAME', '$PHONE', '$EMAIL', '$GENDER', '$DOB', '$RESIDENCY')";

    $result = mysqli_query($CON,$query);

    if($result){
        header('location:../success.html');
    }
    else{
        echo " Error in submission ";
    }
}