<?php
if(isset($_POST['name'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if(!$con){
        die("connection to this database failed due to" .
        mysqli_connect_error());
    }
    echo "Success connecting to db";

    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $age = $_POST['age'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $other = $_POST['other'];
    INSERT INTO tour` (`Name`, `Age`, `Gender`, `Mail`, `Phone`, `Other`, `dt`) 
    VALUES ('$name', '$age', '$gender', '$mail', '$phone', 
    '$desc', current_timestamp());
    echo $sql;

    if($con->query($sql)==true){
        echo "Successfully inserted";
    }
    else{
        echo "ERROR : $sql <br> $con->error";
    }
    $con->close();
}
?>

