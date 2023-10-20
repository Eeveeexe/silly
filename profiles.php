<?php
$sn = "127.0.0.1"; 
$un = "root"; 
$pw = "Super.Cool55"; 
//$db="if0_35157218_gibjtut";

// Create connection
$conn = new mysqli($sn, $un, $pw, $db);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

echo "<link href='styles.css' rel='stylesheet'>";

echo "<div class='topnav'>";
echo "  <a class='active' href='/index.html'>Home</a>";
echo "  <a href='/login.html'>Login</a>";
echo "  <a href='/flistadd.html'>Friends</a>";
echo "  <a href='/test.html'>Contact</a>";
echo "  <a href='/profiles.php'>Profile</a>";
echo "  <center>";
echo "  <h1 class='big'> GibJohn Tutoring</h1>";
echo "  </center>";
echo "</div>";



/*
echo "<h1 class='cen'> Profile </h1>";
echo "<div class='card'>";
echo "    <h1>"$row['UserName']"</h1>";
echo "   <p>frog</p>";
echo "   <button class ='center'> Add Friend </button>";
echo "   </div>";

*/
echo "<h1 class='cen'> Profile </h1>";
$sql = "SELECT * FROM UserLogin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
      echo "<form method='post' action='/connect.php'>";

        //echo "id: " . $row["Primary"]." ,Username: " . $row["UserName"]. " ,Name: " . $row["fname"]. " ,LastName: " . $row["sname"]. " ,Email: " . $row["email"]. "<br><br>";
    


echo "<br><br>";
echo "<div class='card'>";
echo      "Username: ".$row["UserName"];
echo "<br><br>";
echo " Friend ID: ".$row["Primary"]   ;
echo "<br><br>";
echo "   <button class ='center'> Add Friend </button>";
echo "<br><br>";
echo "   </div>";

 }
}

$conn->close();
?>
