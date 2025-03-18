<?php 
$username="ojmma";
$password= "ojmma@";
$hostname = "localhost";

$dbconnect =new mysqli(  "localhost", "ojmma", "ojmma@", "busBooking");

if(!$dbconnect){
die("Connection failed: ".mysqli_error());
}

if(isset($_POST["Name"]) && !empty($_POST["Name"])){
    $name = $_POST["Name"];
    if(!preg_match("/^[a-zA-Z0-9]*$/", $name)){
        echo"Name: <div class='errorM'>Only letters and numbers are allowed</div>";
        return;
        }
}


$email= $_POST["Email"];

$phone= $_POST["PhoneNumber"];

$stmt= $dbconnect->prepare("INSERT INTO customer (Name, Email, PhoneNumber) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $name, $email, $phone);
$stmt->execute();

//check if data was inserted succesfully
if($stmt -> affected_rows == 1){
    //store username in session
    session_star();
    $_SESSION['user']= $name;

    //redirect to welcome page
    header("Location: user.php");
    exit;
}else{
    echo "Error creating user: ".$dbconnect->error;
}

//close connection
$stmt->close();
$dbconnect->close()




?> 