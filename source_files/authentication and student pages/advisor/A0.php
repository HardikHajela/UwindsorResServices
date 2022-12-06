<html>
  <body>
    <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
$servername = "localhost";
$username = "hajela_COMP4150";
$password = "root";
$dbname = "hajela_COMP4150";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['submit'])){
      $ID = $_POST["id"];
     
  
$sql = "SELECT * FROM student WHERE ADV_ID = $ID";


$result = $conn->query($sql);

if ($result->num_rows > 0) {

  header("Location: https://nwakoby.myweb.cs.uwindsor.ca/comp4150/Advisor/advread.php");
    
}  else {
    echo "Invalid ADV_ID";
    }
 
}
$conn->close();
?>
   </body>
</html>