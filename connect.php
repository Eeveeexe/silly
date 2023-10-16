<?php
ini_set('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting(E_ALL);

$sn = "sql301.infinityfree.com"; 
$un = "if0_35157218"; 
$pw = "OGUK3cRdYm"; 
$db="if0_35157218_gibjtut";

$conn = new mysqli($sn, $un, $pw, $db);

if ($conn->connect_error){
    die ("Connection failed:").$conn->connect_error;
}

$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$email = $_POST['email'];
$fname = $_POST['fname'];
$sname = $_POST['sname'];

$sql = "INSERT INTO UserLogin (UserName, Password, email, fname, sname) VALUES ('$UserName','$Password','$email','$fname','$sname')";
if ($conn->query($sql)===TRUE) {
    echo "success";
} else {
    echo "error:".$sql. "<br>". $conn->error;
}

$conn->close();
header("Location: index.html");
exit();

?>