<?php
require './connection.php';
$NAME = $_POST['name'];
$EMAIL = $_POST['email'];
$MESSAGE = $_POST['message'];
$sql = "INSERT INTO `form-data`(`NAME`,`EMAIL-ID`,`MESSAGE`) VALUES('$NAME','$EMAIL','$MESSAGE')";
if(mysqli_query($con,$sql)){
    echo "Entered.";
}else{
    echo "not Entered.";
}
header("Location: index.html");
?>