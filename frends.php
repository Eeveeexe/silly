<?php
ini_set('display_errors', 1);
ini_set ('display_startup_errors', 1);
error_reporting(E_ALL);

$sn = "127.0.0.1"; 
$un = "root"; 
$pw = "Super.Cool55"; 
//$db="if0_35157218_gibjtut";

$conn = new mysqli($sn, $un, $pw, $db);

if ($conn->connect_error){
    die ("Connection failed:").$conn->connect_error;
}

$UserName = $_POST['UserName'];
$frenamt = $_POST['frenamt'];
$sql = "INSERT INTO Userfrends (UserName, frenamt) VALUES ('$UserName','$frenamt')";
if ($conn->query($sql)===TRUE) {
    echo "success";
} else {
    echo "error:".$sql. "<br>". $conn->error;
}

$conn->close();
header("Location: index.html");
exit();

?>
