<?php
    $name = $_POST["s_Name"];
    $email = $_POST["Email"];
    $gender = $_POST["Gender"];
    $status = empty($_POST["Agree"]) ? "No" : "Yes";

    require './dbcon.php';
    if(!$link){
        echo 'ERROR: Unable to connect to the MyQSL'. PHP_EOL;
	exit; 
    }
    
    $sql = "INSERT INTO students(name, email, gender, status) 
    VALUES ('$name', '$email', '$gender', '$status')";

    $res = mysqli_query($link, $sql);

    if(!$res){
	    die('Couldn\'t add user' . mysqli_error($link));
    }

    echo 'User added Succussfully';

?> 









